<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class mutatorcontroller extends Controller
{
    public function accessor(){
        $flight = Flight::find(1);

        $flightName = $flight->name;
        return $flightName;
    }
    public function mutator(){
        $flight= new Flight;
        $flight->name='ahd to delhi';
        $flight->airline='vistara';
        $flight->save();
        if($flight->save()){
            echo "data saved successfully";
        }else{
            echo "failed";
        }
    }
}
