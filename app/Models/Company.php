<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps=false;
   public function  memberdata(){

        // one to many inverse
        // return $this->belongsTo(Member::class);
   }
}
