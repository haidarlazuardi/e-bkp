<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $total = DB::table('tr_input_punishments')
            ->select('student_id', DB::raw('sum(score) as count'))
            ->groupBy('student_id')
            ->get();
    	return view('guru/Punishment/data',compact ('total'));
 
    }

    public function create(Request $request)

    {
        $punishments = Tr_input_punishment::create($request->all());
        return redirect()->back();
    }
public function detail()
{
        $punishment = Tr_input_punishment::all();
        return view('siswa/punishment',compact('punishment'));
    }

    public function delete($id)
    {
        $punishment = Tr_input_punishment::find($id);
        $punishment->delete($punishment);

        return redirect()->back();
    }

}
