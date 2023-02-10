<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentattendance;
use App\Models\employattendance;
use App\Models\student;
use App\Models\employ;
use App\Models\grade;
use App\Models\course;
use App\Models\grade_studentattendances;
use App\Models\result;

class highhead extends Controller
{
    //
    public function get2()
    {
       
        return view('highhead.hhead');

    }

    public function tname2()
    {
        $data=employ::select('Full_name')->get();
        return view('highhead.name',['employ'=>$data]);
    }
    public function assign2()
    {
       $employ=Employ::all();
        return view('highhead.subject',compact('employ')); 
    }

    public function sattend2()
    {
        $studentattendance=studentattendance::all();
        return view('highhead.s_attend2',compact('studentattendance')); 
    }

    public function tattend2()
    {
        $employattendance=employattendance::all();
        return view('highhead.t_attend2',compact('employattendance')); 
    }
    public function sresult2()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('highhead.s_result2',compact('result'));
    }
}
