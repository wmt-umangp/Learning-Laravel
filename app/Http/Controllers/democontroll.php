<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class democontroll extends Controller
{
    public function demo($fname){
        echo "Hello $fname!!";
    }
    public function getdata(){
        return Track::all();
    }
}
