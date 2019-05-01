<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monchuyennganh extends Model
{
    protected $fillable = ['course_code', 'course_name', 'tinchi', 'department_code'];
}
