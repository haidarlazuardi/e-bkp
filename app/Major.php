<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    
    protected $table = 'majors';
    protected $fillable = ['major'];

    public function Student()
    {
        return $this->belongsTo('App\Student');
    }
}
