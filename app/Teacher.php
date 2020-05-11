<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    protected $table = 'teachers';
    protected $fillable = ['nip','full_name','role','password'];

public function Rayon()
    {
        return $this->hasOne('App\Rayon');
    }
}
