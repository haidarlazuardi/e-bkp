<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Rayon;
use \App\Teacher;

class RayonController extends Controller
{
    //
    public function index()
    {

        $teacher = Teacher::all();
        $rayon = Rayon::all();
    	return view('admin/Rayon/index',compact('rayon','teacher'));
 
    }

    public function create(Request $request)
    {
        Rayon::create($request->all());
        return redirect()->back();
    }


    public function delete($id)

    {
        $rayon = Rayon::find($id);
        $rayon->delete($rayon);
        return redirect()->back();
        }
    public function edit($id)
        {       
            $rayon = Rayon::find(); 
            
            }
    public function update(Request $request)
        { 
            $rayon = Rayon::findOrFail($request->rayon_id);
            $rayon->update($request->all());
                
            return redirect()->back();
            }
    
            
}
