<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Punishment;
use  \App\Tr_input_punishment;
use \App\Student;
use \App\Score_punishment;


class Punishment_trController extends Controller
{
    public function index()
    {
        $total = Tr_input_punishment::all();
        $student= Student::all();
        $punishment = Punishment::all();
        

    	return view('guru/Punishment/index',compact ('punishment','student','total'));
 
    }

    public function show()
    {
        $total = Tr_input_punishment::all();
        

    	return view('guru/Punishment/data',compact ('total'));
 
    }

    public function create(Request $request)

    {
        $punishments = Tr_input_punishment::create($request->all());
        $score = new Score_punishment;
        $score->student_id = $punishments->student_id;
        $score->totaly_score =$punishments->score;
        $score->save();
        
        return redirect()->back();
    }


}
