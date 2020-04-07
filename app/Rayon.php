<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    
    protected $table = 'rayon';
    protected $fillable = ['rayon','teacher_id'];
}
