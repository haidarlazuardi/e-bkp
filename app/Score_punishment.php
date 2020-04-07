<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score_punishment extends Model
{
    
    protected $table = 'score_punishments';
    protected $fillable = ['student_id','totaly_score'];
}
