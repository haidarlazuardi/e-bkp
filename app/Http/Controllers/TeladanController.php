<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Score_reward;
use PDF;

class TeladanController extends Controller
{
    public function index()
    {
        $student = Student::all();
        $total = DB::table('tr_input_rewards')
        ->select('student_id', DB::raw('sum(score) as count'))
        ->groupBy('student_id')
        ->get();
     	return view('guru/Teladan/index',compact ('total','student'));
 
    }

    public function cetak_pdf(){
        $student = Student::all();
        $score = Score_reward::all();
        $pdf = PDF::loadview('guru/Teladan/pdfteladan',compact('student','score'));
        return $pdf->download('teladan-pdf.pdf');
    }

}
