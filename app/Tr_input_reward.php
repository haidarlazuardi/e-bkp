<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr_input_reward extends Model
{
    protected $table = 'tr_input_rewards';
    protected $fillable = ['student_id','reward_id','score','spectator'];

}
