<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employcourse;

use App\Models\studentattendance;
use App\Models\student;
use App\Models\employ;
use App\Models\course;
use App\Models\result;
use PhpParser\Node\Expr\AssignOp\Concat;

class teacher extends Controller
{
    //
    public function view()
    {
        return view('teacher.student_attendance');
    }

    public function attendance()
    {
        $data=student::select('id','Full_name','Rollno')->get();
        return view('teacher.student_attendance',['student'=>$data]);
    }

    function markattend($id)
    {
        $data= student::find($id);
        return view('teacher.markattendance1',['data'=>$data]); 
       
    }

    public function updateValue(request $req)
    {
        $data= new studentattendance;
        $data->name=$req->fullname;
        $data->roll_no=$req->Rollno;
        $data->date=$req->date;
        $data->status=$req->radio;
        $data->save();
        return redirect('student_attendance');
    }

    public function get()
    {
       
        return view('teacher.teach');

    }

   

    public function show()
    {
       $employ=Employ::all();
      
     
       
    //    dd($employ);
    // foreach($employ as $emp)
    // {
    //     $courses=$emp->Course;
      
    // }
    return view('teacher.teacher_data',compact('employ')); 
        
        

        // $course=Course::find(1);
        // $employs=$course->Employ;
        // dd($employs);

    }

    public function viewresult()
    {
        return view('teacher.result');
    }
   
 
    public function uploadresult(request $req)
    {
        $data= new result;
        $data->std_id=$req->stdid;
        $data->obtained_marks=$req->mark1;
        $data->total_marks=$req->mark2;
        $data->save();
        return redirect()->back();
    }
   
   

    public function attend()
    {
        $data=studentattendance::all();
        return view('teacher.std_attend',['studentattendance'=>$data]);
    }
    function mark($id)
    {
        $data= studentattendance::find($id);
        return view('teacher.attendance',['data'=>$data]); 
       
    }

    public function update(request $req)
    {
        $data= studentattendance::find($req->id);
        $data->name=$req->fullname;
        $data->	roll_no=$req->rollno;
        $data->date=$req->date;
        $data->status=$req->radio;
        $data->save();
        return redirect('std_attend');
    }


    public function views()
    {
        $data = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('teacher.std_result',compact('data'));
    }

    function mark2($id)
    {
        $data= result::find($id);
        return view('teacher.results',['data'=>$data]); 
       
    }
    public function update2(request $req)
    {
        $data= result::find($req->id);
        $data->std_id =$req->stdid;
        $data->	obtained_marks=$req->obtmark;
        $data->total_marks=$req->tmark;
        $data->save();
        return redirect('std_result');
    }


}
