<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{

    protected $table = 'punishments';
    protected $fillable = ['code_punishment','point']; 
}
