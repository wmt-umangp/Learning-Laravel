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

    // if($request->routeIs('reqdata')){
    //     echo "route is right";
    // }
    // else{
    //     echo "wrong route";
    // }

    // echo $request->url()."<br>";
    // echo $request->fullUrl()."<br>";
    // echo $request->fullUrlWithQuery(['type'=>'phone']);
    // echo $request->path();
    // echo $request->method();
    // echo $request->ip();
    // print_r($request->cookie());

      echo "Your First Name is: ".$request->input('fname')."<br><br>";
      echo "Your Last Name is: ".$request->input('Lname')."<br><br>";
      echo "Your Password is: ".$request->input('password')."<br><br>";
      $file=$request->file('files')->store('profile');
      if($file){
          echo "file uploaded";
      }else{
          echo "error";
      }
      echo "Extension of file uploaded is: ".$request->file('files')->extension();

    }

    // demo function for blade template
    public function bladedemo(){
        $a=10;
        $b=20;
        return view('welcome',['name'=>$a+$b]);
    }
}
