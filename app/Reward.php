<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = 'rewards';
    protected $fillable = ['code_rewards','score','description'];

public function Tr_input_reward()
    {
        return $this->hasMany('app\Tr_input_reward');
    }
}
