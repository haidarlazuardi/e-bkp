<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeladanController extends Controller
{
    public function index()
    {
        $total = DB::table('tr_input_rewards')
        ->select('student_id', DB::raw('sum(score) as count'))
        ->groupBy('student_id')
        ->get();
     	return view('guru/Teladan/index',compact ('total'));
 
    }

}
