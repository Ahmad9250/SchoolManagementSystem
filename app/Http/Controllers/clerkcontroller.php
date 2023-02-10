<?php

namespace App\Http\Controllers;

use App\Models\grade;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\student;
use App\Models\employ;
use App\Models\course;
use App\Models\employattendance;


class clerkcontroller extends Controller
{
    //
    public function addview()
    {
        return view('clerk.add_student');
    }
    public function upload(request $request)
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

    public function view()
    {
        return view('clerk.add_employ');
    }

    public function upload2(request $request2)
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

    public function view2()
    {
        return view('clerk.add_course');
    }

    public function uploaddata(request $request3)
    {
        $req= new course;
        $req->course_name=$request3->coursename;
        // $req->class_id=$request3->myselect;
        $req->save();
        return redirect()->back();
    }

    public function class1()
    {
        return view('clerk.add_class');
    }

    public function uploadclass(request $req1)
    {
        $req= new grade;
        $req->class_name=$req1->classname;
        $req->save();
        return redirect()->back();
    }




    public function list()
    {
        $data=student::all();
        return view('clerk.update_student',['student'=>$data]);
    }

    // public function delete($id)
    // {
    //     $data=student::find($id);
    //     $data->delete();
    //     return redirect('update_student');
    // }
    function edit($id)
    {
        $data= student::find($id);
        return view('clerk.edit',['data'=>$data]); 
    }
    function update(Request $req)
    {
        $data=student::find($req->id);
        $data->Full_name=$req->fullname;
        $data->Rollno=$req->rollno;
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->fee=$req->fee;
        $data->address=$req->address;
        $data->contact=$req->contact;
        $data->save();
        return redirect('update_student');
    }


    public function list2()
    {
        $data=employ::all();
        return view('clerk.update_employ',['employ'=>$data]);
    }

    // public function delete2($id)
    // {
    //     $data=employ::find($id);
    //     $data->delete();
    //     return redirect('update_employ');
    // }
    function edit2($id)
    {
        $data= employ::find($id);
        return view('clerk.edit2',['data'=>$data]); 
    }
    function update2(Request $req)
    {
        $data=employ::find($req->id);
        $data->Full_name=$req->fullname;
        $data->emp_no=$req->empno;
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->salary=$req->salary;
        $data->contact=$req->contact;
        $data->email=$req->email;
        $data->cnic=$req->cnic;
        $data->user_type=$req->usertype;
        $data->save();
        return redirect('update_employ');
    }

    public function attendance1()
    {
        $data=employ::select('id','Full_name','emp_no','user_type')->get();
        return view('clerk.employ_attendances',['employ'=>$data]);
    }

    function markAttend($id)
    {
        $data= employ::find($id);
        return view('clerk.markattendance',['data'=>$data]); 
       
    }


    public function updatevalue(request $req)
    {
        $data= new employattendance;
        $data->name=$req->fullname;
        $data->emp_no=$req->empno;
        $data->in_time=$req->intime;
        $data->out_time=$req->outtime;
        $data->attendance=$req->radio;
        $data->Date=$req->date;
        $data->save();
        return redirect('employ_attendances');
    }

    

   

    
}


    
   


