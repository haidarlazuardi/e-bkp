<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_input_punishment extends Model
{
    protected $table = 'tr_input_punishments';
    protected $fillable = ['student_id','punishment_id','score','spectator'];
}
