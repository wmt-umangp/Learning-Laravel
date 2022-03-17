<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reqcontroll extends Controller
{
    public function reqdata(Request $request){
    //   echo url()->current();
    //   echo url()->full();
    //   echo url()->previous();

    $validate=$request->validate([
        'fname'=>'required',
        'Lname'=>'required',
        'password'=>'required',
        'confirmpassword'=>'required',
    ],[
        'fname.required'=>'Please Enter First Name!!!',
        'Lname.required'=>'Please Enter Last Name!!!',
        'password.required'=>'Please Enter Password!!!',
        'confirmpassword.required'=> 'Please Enter Confirm Password!!!',
    ]);


      echo "Your First Name is: ".$request->input('fname')."<br><br>";
      echo "Your Last Name is: ".$request->input('Lname')."<br><br>";
      echo "Your Password is: ".$request->input('password')."<br><br>";
    }
}
