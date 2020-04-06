<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score_reward extends Model
{
    protected $table = 'score_rewards';
    protected $fillable = ['student_id','totaly_score'];

}
