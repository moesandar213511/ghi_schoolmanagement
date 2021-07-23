<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'email',
        'relation',
        'phone',
        'address',
        'student_id'
    ];
}
