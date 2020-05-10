<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PeringatanController extends Controller
{

    public function index()
    {
        $total = DB::table('tr_input_punishments')
        ->select('student_id', DB::raw('sum(score) as count'))
        ->groupBy('student_id')
        ->get();
     	return view('guru/Peringatan/index',compact ('total'));
 
    }
}
