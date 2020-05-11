<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Reward;
use  \App\Tr_input_reward;
use \App\Student;
use \App\Score_reward;
use PDF;

class Reward_trController extends Controller
{

    public function index()
    {

        $total = Tr_input_reward::all();
        $student= Student::all();
        $reward = Reward::all();
    	return view('guru/Reward/index',compact('total','student','reward'));
 
    }

    public function point($id){
        return Reward::findOrFail($id);
    }


    public function show()
    {
        $total = Tr_input_reward::all();
        $student= Student::all();
    	return view('guru/Reward/data',compact ('total','student'));

    }
    public function create(Request $request)

    {
            $reward = Tr_input_reward::firstOrCreate([
            'student_id' => $request->name,
            'reward_id' => $request->deskripsi,
            'score' => $request->point,
            'spectator' => $request->spectator,
        ]);
        
        return redirect()->back();
    }

    public function detail()
{
        $student = Student::all();
        $reward = Tr_input_reward::all();
        return view('siswa/reward',compact('reward','student'));
    }

    public function delete($id)
    {
        $reward = Tr_input_reward::find($id);
        $reward->delete($reward);

        return redirect()->back();
    }

    public function cetak_pdf()
    {
    	$reward = Tr_input_reward::all();
        $student= Student::all();
    	$pdf = PDF::loadview('guru/Reward/pdfreward',compact ('reward','student'));
    	return $pdf->download('reward-pdf.pdf');
    }

}
