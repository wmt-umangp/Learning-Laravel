<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class membercontroller extends Controller
{
    public function showdata(){
         return Member::find(1)->companydata;
    }
}
