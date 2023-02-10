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
use App\Models\member;
use App\Models\result;

class admin extends Controller
{
    //
    public function show()
    {
       
        return view('admin.Admin');

    }
    public function attend()
    {
        $employattendance=employattendance::all();
        return view('admin.empattend',compact('employattendance')); 
    }
    public function sattend()
    {
        $studentattendance=studentattendance::all();
        return view('admin.stdattend',compact('studentattendance')); 
    }
    public function sname()
    {
        $data=course::all();
        return view('admin.allsub',['course'=>$data]);
    }

    public function view()
    {
        return view('admin.addsub');
    }

    public function uploaddata(request $request3)
    {
        $req= new course;
        $req->course_name=$request3->coursename;
 
        $req->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $data=course::find($id);
        $data->delete();
        return redirect('allsub');
    }
    public function user()
    {
        $user=member::all();
        return view('admin.alluser',compact('user')); 
    }
    public function del($id)
    {
        $data=member::find($id);
        $data->delete();
        return redirect('alluser');
    }

    public function view1()
    {
        return view('admin.adduser');
    }

    function adddata(Request $req)
    {
        $member= new member;
        $member->email=$req->email; 
        $member->password=$req->password;
        $member->User_type=$req->User_type;
        $member->save();
        return redirect('adduser');
    }
    public function list()
    {
        $data=student::all();
        return view('admin.allstd',['student'=>$data]);
    }
    public function del1($id)
    {
        $data=student::find($id);
        $data->delete();
        return redirect('allstd');
    }

    public function view2()
    {
        return view('admin.addstd');
    }
    public function addstd(request $request)
    {
        $req= new student;
        $req->Full_name=$request->fullname;
        $req->Rollno=$request->rollno;
        $req->dob=$request->dob;
        $req->gender=$request->gender;
        $req->fee=$request->fee;
        $req->address=$request->address;
        $req->contact=$request->contact;
        $req->save();
        return redirect()->back();
    }
    public function stdres()
    {
        $result = student::join('results' ,'students.id', '=', 'results.std_id' )
        ->get(['students.id','students.Full_name','students.Rollno', 'results.obtained_marks','results.total_marks']);
   
        return view('admin.stdres',compact('result'));
    }
    public function showemp()
    {
        $data=employ::all();
        return view('admin.allemp',['employ'=>$data]);
    }
    public function del2($id)
    {
        $data=employ::find($id);
        $data->delete();
        return redirect('allemp');
    }

    public function view3()
    {
        return view('admin.addemp');
    }
    public function addemp(request $request2)
    {
        $req= new employ;
        $req->Full_name=$request2->fullname;
        $req->emp_no=$request2->empno;
        $req->dob=$request2->dob;
        $req->gender=$request2->gender;
        $req->address=$request2->address;
        $req->salary=$request2->salary;
        $req->contact=$request2->contact;
        $req->email=$request2->email;
        $req->cnic=$request2->cnic;
        $req->user_type=$request2->usertype;
        $req->save();
        return redirect()->back();
    }

    public function data()
    {
       $employ=Employ::all();
        return view('admin.courseassign',compact('employ')); 
    }
}
