<?php

use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\clerkcontroller;
use App\Http\Controllers\highhead;
use App\Http\Controllers\middlehead;
use App\Http\Controllers\officer;
use App\Http\Controllers\primaryhead;
use App\Http\Controllers\principal;
use App\Http\Controllers\teacher;

use App\Models\grade;
use App\Models\course;
use App\Models\employ;
use App\Models\studentattendance;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function () {
//     if(session()->has('login'))
//     {
//         return redirect('home');
//     }
//     return view('login');
// });

Route::view("index","/index");
Route::view("about","/about"); 
Route::view("contact","/contact");
Route::view("signup","/signup");
Route::view("login","/login");
Route::view("home","clerk/home");


// Route::view("clerk","/clerk");
Route::view("teach","teacher/teach");
Route::view("primaryhead","/primaryhead");
Route::view("middlehead","/middlehead");
Route::view("highhead","/highhead");
Route::view("principal","/principal");
Route::view("educationofficer","/educationofficer");
Route::view("admin","/admin");

Route::post('signup',[SignupController::class,'addData']);
Route::post('login',[loginController::class,'Login']);
Route::get('add_student',[clerkcontroller::class,'addview']);
Route::post('upload_student',[clerkcontroller::class,'upload']);
Route::get('add_employ',[clerkcontroller::class,'view']);
Route::post('upload_employ',[clerkcontroller::class,'upload2']);
Route::get('add_course',[clerkcontroller::class,'view2']);
Route::post('upload_course',[clerkcontroller::class,'uploaddata']);
Route::get('add_class',[clerkcontroller::class,'class1']);
Route::post('upload_class',[clerkcontroller::class,'uploadclass']);

Route::get('update_student',[clerkcontroller::class,'list']);
// Route::get('delete/{id}',[clerkcontroller::class,'delete']);
Route::get('edit/{id}',[clerkcontroller::class,'edit']);
Route::post('edit',[clerkcontroller::class,'update']);

Route::get('update_employ',[clerkcontroller::class,'list2']);
// Route::get('delete2/{id}',[clerkcontroller::class,'delete2']);
Route::get('edit2/{id}',[clerkcontroller::class,'edit2']);
Route::post('edit2',[clerkcontroller::class,'update2']);


Route::get('employ_attendances',[clerkcontroller::class,'attendance1']);
Route::get('markattendance/{id}',[clerkcontroller::class,'markAttend']);
Route::post('markattendance',[clerkcontroller::class,'updatevalue']);

Route::get('student_attendance',[teacher::class,'view']);
Route::get('student_attendance',[teacher::class,'attendance']);
Route::get('markattendance1/{id}',[teacher::class,'markattend']);
Route::post('markattendance1',[teacher::class,'updateValue']);

Route::get('teach',[teacher::class,'get']);
Route::get('teacher_data',[teacher::class,'show']);




Route::get('/many', function(){
    return employ::with('course')->find(1);
});

Route::get('/a', function(){

    return grade::with('courses')->find(1);
});

Route::get('/g', function(){
    return employ::with('grades')->find(3);
});

Route::get('result',[teacher::class,'viewresult']);
Route::post('student_result',[teacher::class,'uploadresult']);

Route::get('std_attend',[teacher::class,'attend']);
Route::get('attendance/{id}',[teacher::class,'mark']);
Route::post('attendance',[teacher::class,'update']);

Route::get('std_result',[teacher::class,'views']);
Route::get('results/{id}',[teacher::class,'mark2']);
Route::post('results',[teacher::class,'update2']);

Route::get('phead',[primaryhead::class,'get']);
Route::get('name',[primaryhead::class,'tname']);
Route::get('subject',[primaryhead::class,'assign']);
Route::get('s_attend',[primaryhead::class,'sattend']);
Route::get('t_attend',[primaryhead::class,'tattend']);
Route::get('s_result',[primaryhead::class,'sresult']);

Route::get('mhead',[middlehead::class,'get1']);
Route::get('name1',[middlehead::class,'tname1']);
Route::get('subject1',[middlehead::class,'assign1']);
Route::get('s_attend1',[middlehead::class,'sattend1']);
Route::get('t_attend1',[middlehead::class,'tattend1']);
Route::get('s_result1',[middlehead::class,'sresult1']);

Route::get('hhead',[highhead::class,'get2']);
Route::get('name2',[highhead::class,'tname2']);
Route::get('subject2',[highhead::class,'assign2']);
Route::get('s_attend2',[highhead::class,'sattend2']);
Route::get('t_attend2',[highhead::class,'tattend2']);
Route::get('s_result2',[highhead::class,'sresult2']);

Route::get('pbody',[principal::class,'show']);
Route::get('sdata',[principal::class,'list']);
Route::get('tdata',[principal::class,'list2']);
Route::get('sattend',[principal::class,'sattend']);
Route::get('tattend',[principal::class,'tattend']);
Route::get('sresult',[principal::class,'sresult']);
Route::get('assign',[principal::class,'assign']);


Route::get('pbody1',[officer::class,'show']);
Route::get('s_attend3',[officer::class,'sattend3']);
Route::get('t_attend3',[officer::class,'tattend3']);
Route::get('s_result3',[officer::class,'sresult3']);

Route::get('Admin',[admin::class,'show']);
Route::get('empattend',[admin::class,'attend']);
Route::get('stdattend',[admin::class,'sattend']);
Route::get('allsub',[admin::class,'sname']);
Route::get('addsub',[admin::class,'view']);
Route::post('up_course',[admin::class,'uploaddata']);
Route::get('delete/{id}',[admin::class,'delete']);
Route::get('alluser',[admin::class,'user']);
Route::get('delete/{id}',[admin::class,'del']);
Route::get('adduser',[admin::class,'view1']);
Route::post('add_user',[admin::class,'adddata']);
Route::get('allstd',[admin::class,'list']);
Route::get('del/{id}',[admin::class,'del1']);
Route::get('addstd',[admin::class,'view2']);
Route::post('add_std',[admin::class,'addstd']);
Route::get('stdres',[admin::class,'stdres']);
Route::get('allemp',[admin::class,'showemp']);
Route::get('allemp',[admin::class,'showemp']);
Route::get('delete/{id}',[admin::class,'del2']);
Route::get('addemp',[admin::class,'view3']);
Route::post('add_emp',[admin::class,'addemp']);
Route::get('courseassign',[admin::class,'data']);




Route::get('/all', function(){
    return Studentattendance::with('grade')->get();
});