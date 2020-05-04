<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_input_reward extends Model
{
    protected $table = 'tr_input_rewards';
    protected $fillable = ['student_id','reward_id','score','spectator'];

public function Reward()
    {
        return $this->belongsTo('app/Reward');
    }
public function Student()
    {
        return $this->belongsTo('app/Student');
    }
}
