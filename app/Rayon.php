<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    
    protected $table = 'rayons';
    protected $fillable = ['rayon','teacher_id'];
    
public function Student()
    {
        return $this->hasMany('App\Student');

    } 
public function Teacher()
    {
        return $this->belongsTo('App\Teacher');
    }   
}
