<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'gender',
        'religion',
        'nationality',
        'class_id',
        'class_group_id'
    ];
}
