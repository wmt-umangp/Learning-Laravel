<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Flight extends Model
{
    use HasFactory;

    public function getnameAttribute($value)
    {
        return strtolower($value);
    }
    public function setairlineAttribute($value)
    {
        $this->attributes['airline'] = strtoupper($value);
    }
    public function setnameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
