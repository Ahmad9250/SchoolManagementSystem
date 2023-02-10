<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\studentattendance;
use App\Models\employattendance;
use App\Models\student;
use App\Models\employ;
use App\Models\grade;
use App\Models\course;
use App\Models\grade_studentattendances;
use App\Models\result;
class primaryhead extends Controller
{
    //
    public function get()
    {
       
        return view('primaryhead.phead');

    }

    public function tname()
    {
        $data=employ::select('Full_name')->get();
        return view('primaryhead.name',['employ'=>$data]);
    }
    public function assign()
    {
       $employ=Employ::all();
        return view('primaryhead.subject',compact('employ')); 
    }

    public function sattend()
    {
        $studentattendance=studentattendance::all();
        return view('primaryhead.s_attend',compact('studentattendance')); 
    }

    public function tattend()
    {
        $employattendance=employattendance::all();
        return view('primaryhead.t_attend',compact('employattendance')); 
    }
    public function sresult()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('primaryhead.s_result',compact('result'));
    }
}
