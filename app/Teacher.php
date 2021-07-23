<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_id',
        'name',
        'email',
        'phone',
        'address',
        'photo',
        'role',
        'nrc',
        'dob',
        'gender'
    ];
}
