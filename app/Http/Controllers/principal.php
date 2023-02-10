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
class principal extends Controller
{
    //
    public function show()
    {
       
        return view('principal.pbody');

    }

    public function list()
    {
        $data=student::all();
        return view('principal.sdata',['student'=>$data]);
    }
    public function list2()
    {
        $data=employ::all();
        return view('principal.tdata',['employ'=>$data]);
    }
    public function sattend()
    {
        $studentattendance=studentattendance::all();
        return view('principal.sattend',compact('studentattendance')); 
    }
    public function tattend()
    {
        $employattendance=employattendance::all();
        return view('principal.tattend',compact('employattendance')); 
    }
    public function sresult()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('principal.sresult',compact('result'));
    }
    public function assign()
    {
       $employ=Employ::all();
        return view('principal.assign',compact('employ')); 
    }
}
