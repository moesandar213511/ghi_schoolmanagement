<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classgroup extends Model
{
    protected $fillable = [
        'class_group_id',
        'name',
        'class_id',
        'teacher_id'
    ];
}
