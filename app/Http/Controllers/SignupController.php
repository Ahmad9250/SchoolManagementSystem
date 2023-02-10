<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\Crypt;

class SignupController extends Controller
{
    //
    function addData(Request $req)
    {
        $member= new member;
        $member->email=$req->email; 
        $member->password=$req->password;
        $member->User_type=$req->User_type;
        $member->save();
        return redirect('login');
    }

   
}

