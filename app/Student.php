<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nis','full_name','gender','major_id','rombel_id','rayon_id'];
}
