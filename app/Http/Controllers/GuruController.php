<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Teacher;
use \App\User;
class GuruController extends Controller
{
    //
    public function index()
    {

        $teacher = Teacher::all();
    	return view('admin/Guru/index',compact('teacher'));
 
    }

    public function create(Request $request)
    {   
        $user = new User;
        $user->role = 'guru';
        $user->name = $request->full_name;
        $user->email =$request->email;
        $user->password =bcrypt('rahasia');
        $user->remember_token = str::random(60);
        $user->save();
        
        $request->request->add(['user_id' => $user->id]);

        Teacher::create($request->all());
        return redirect()->back();
    }

     public function delete($id)

    {
        $teacher = Teacher::find($id);
        $teacher->delete($teacher);
        return redirect()->back();
        }
        public function edit($id)
        {       
            $teacher = Teacher::find(); 
            
            }
        public function update($id,Request $request)
        { 
            $this->validate($request,[
                'nip' => 'required',
                'full_name'=>'required'
               ]);
               $teacher= Teacher::find($id);
               $teacher->nip = $request->nip;
               $teacher->full_name = $request->full_name;
               $teacher->save();
                    
                return redirect()->back();
    
            }
}
