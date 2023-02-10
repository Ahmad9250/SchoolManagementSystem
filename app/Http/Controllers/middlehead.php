<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\studentattendance;
use App\Models\employattendance;
use App\Models\student;
use App\Models\employ;
use App\Models\grade;
use App\Models\course;
use App\Models\grade_studentattendances;
use App\Models\result;
class middlehead extends Controller
{
    //
    public function get1()
    {
       
        return view('middlehead.mhead');

    }

    public function tname1()
    {
        $data=employ::select('Full_name')->get();
        return view('middlehead.name',['employ'=>$data]);
    }
    public function assign1()
    {
       $employ=Employ::all();
        return view('middlehead.subject',compact('employ')); 
    }

    public function sattend1()
    {
        $studentattendance=studentattendance::all();
        return view('middlehead.s_attend1',compact('studentattendance')); 
    }

    public function tattend1()
    {
        $employattendance=employattendance::all();
        return view('middlehead.t_attend1',compact('employattendance')); 
    }
    public function sresult1()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('middlehead.s_result1',compact('result'));
    }
}
