<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Reward;
use  \App\Tr_input_reward;
use \App\Student;
use \App\Score_reward;

class Reward_trController extends Controller
{

    public function index()
    {

        $total = Tr_input_reward::all();
        $student= Student::all();
        $reward = Reward::all();
    	return view('guru/Reward/index',compact('total','student','reward'));
 
    }


    public function show()
    {
        $total = Tr_input_reward::all();
        

    	return view('guru/Reward/data',compact ('total'));

    }
    public function create(Request $request)

    {
        $punishments = Tr_input_reward::create($request->all());
        $score = new Score_reward;
        $score->student_id = $punishments->student_id;
        $score->totaly_score =$punishments->score;
        $score->save();
        
        return redirect()->back();
    }

}
