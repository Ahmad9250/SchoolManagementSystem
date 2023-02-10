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

class officer extends Controller
{
    //
    public function show()
    {
       
        return view('officer.pbody1');

    }
    public function sattend3()
    {
        $studentattendance=studentattendance::all();
        return view('officer.s_attend3',compact('studentattendance')); 
    }

    public function tattend3()
    {
        $employattendance=employattendance::all();
        return view('officer.t_attend3',compact('employattendance')); 
    }
    public function sresult3()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('officer.s_result3',compact('result'));
    }
}
