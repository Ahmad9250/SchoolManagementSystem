<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\Crypt;

class loginController extends Controller
{
    //
    function Login(Request $req)
    {
        $member= member::where('email',$req->input('email'))->first();
        if(($member->password)==$req->input('password'))
        {
            if($member->user_type=="clerk")
            {
                return redirect('home');
            }
             if($member->user_type=="teacher")
            {
                return redirect('teach');
            }
            if($member->user_type=="primaryhead")
            {
                return redirect('phead');
            }
            if($member->user_type=="middlehead")
            {
                return redirect('mhead');
            }
            if($member->user_type=="highhead")
            {
                return redirect('hhead');
            }
            if($member->user_type=="principal")
            {
                return redirect('pbody');
            }
            if($member->user_type=="educationofficer")
            {
                return redirect('pbody1');
            }
            if($member->user_type=="admin")
            {
                return redirect('Admin');
            }else{
                return redirect('login');

            }


            
        }
        

    }

}
