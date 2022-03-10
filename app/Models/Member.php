<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function companydata(){
        return $this->hasOne(Company::class);
        // return $this->hasMany(Company::class);
    }
}
