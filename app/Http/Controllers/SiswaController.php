<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Student;
use \App\User;
use \App\Punishment;
use \App\Reward;
use \App\Major;
use \App\Rombel;
use \App\Rayon;
use \App\Score_punishment;
use \App\Score_reward;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $student = Student::all();
        $punishment = Punishment::all();
        $reward = Reward::all();
        $major = Major::all();
        $rombel = Rombel::all();
        $rayon = Rayon::all();
    	return view('admin/Siswa/index',compact('student','punishment','reward','major','rombel','rayon'));
 
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->full_name;
        $user->email =$request->email;
        $user->password =bcrypt('rahasia');
        $user->remember_token = str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);        
        $student = Student::create($request->all());
        $request->request->add(['student_id' =>$student->id]);
        $reward = Score_reward::create([
            'student_id' => $request->student_id,
            'totaly_score' => '0'
        ]);
        $punish = Score_punishment::create([
            'student_id' => $request->student_id,
            'totaly_score' => '0'
        ]);
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete($student);

        return redirect()->back();
        }
        public function edit($id)
        {       
            $student = Student::find(); 
            
            }
        public function update(Request $request)
        { 
            $student = Student::findOrFail($request->student_id);
            $student->update($request->all());
                
            return redirect()->back();
    
            }

    }
