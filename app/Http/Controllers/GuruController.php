<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Teacher;
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
        Teacher::create($request->all());
        return redirect()->back();
    }
}
