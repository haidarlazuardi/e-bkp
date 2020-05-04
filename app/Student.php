<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nis','full_name','gender','major_id','rombel_id','rayon_id'];

public function Rayon()
    {
        return $this->belongsTo('app\Rayon');
    }
public function Major()
    {
        return $this->belongsTo('app\Major');
    }
public function Rombel()
    {
        return $this->belongsTo('app\Rombel');
    }
public function Tr_input_reward()
    {
        return $this->hasMany('app\Tr_input_reward');
    }
public function Tr_input_punishment()
    {
        return $this->hasMany('app\Tr_input_punishment');
    }
public function Score_Punishment()
    {
        return $this->belongsTo('app/Score_punishment');
    }
public function Score_Reward()
    {
        return $this->belongsTo('app/Score_Reward');
    }
}
