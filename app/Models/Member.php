<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps=false;
    use HasFactory;
    public function companydata(){
        //one to one
        // return $this->hasOne(Company::class);

        //one to many
        // return $this->hasMany(Company::class);

        //has one of many
        // return $this->hasOne(Company::class)->ofMany('id','max');

        //has one of many
        // return $this->hasOne(Company::class)->latestOfMany();

        //has one of many
        // return $this->hasOne(Company::class)->oldestOfMany();

        // has one through
        // return $this->hasOneThrough(Owner::class,Company::class);

        //has many through
        // return $this->hasManyThrough(Owner::class,Company::class);

        //many to many
        // return $this->belongsToMany(Company::class);

        

    }

}
