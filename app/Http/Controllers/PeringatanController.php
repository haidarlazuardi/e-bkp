<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score_punishment;
use App\Student;
use PDF;

class PeringatanController extends Controller
{

    public function index()
    {
        $student = Student::all();
        $total = DB::table('tr_input_punishments')
        ->select('student_id', DB::raw('sum(score) as count'))
        ->groupBy('student_id')
        ->get();
     	return view('guru/Peringatan/index',compact ('total','student'));
 
    }

    public function cetak_pdf(){
        $student = Student::all();
        $score = Score_punishment::all();
        $pdf = PDF::loadview('guru/Peringatan/pdfsp',compact ('score','student'));
    	return $pdf->download('sp-pdf.pdf');
    }

}
