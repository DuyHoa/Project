<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhocnganh extends Model
{
    protected $fillable = ['course_code', 'course_name', 'tinchi', 'department_code', 'term];
}
