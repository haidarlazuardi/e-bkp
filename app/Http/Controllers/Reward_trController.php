<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $student= Student::all();
    	return view('guru/Reward/data',compact ('total','student'));

    }
    public function create(Request $request)

    {
        $punishments = Tr_input_reward::create($request->all());
        
        return redirect()->back();
    }

    public function detail()
{
        $reward = Tr_input_reward::all();
        return view('siswa/reward',compact('reward'));
    }

    public function delete($id)
    {
        $reward = Tr_input_reward::find($id);
        $reward->delete($reward);

        return redirect()->back();
    }

}
