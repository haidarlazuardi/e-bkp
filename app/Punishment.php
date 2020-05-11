<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{

    protected $table = 'punishments';
    protected $fillable = ['code_punishment','score','description']; 

public function Tr_input_punishment()
    {
        return $this->hasMany('app\Tr_input_punishment');
    }
}
