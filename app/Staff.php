<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'staff_id',
        'name',
        'email',
        'phone',
        'address',
        'photo',
        'nrc',
        'dob',
        'description',
        'position',
        'gender'
    ];
}
