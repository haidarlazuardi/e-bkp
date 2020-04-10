<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Rayon;

class RayonController extends Controller
{
    //
    public function index()
    {

        $rayon = Rayon::all();
    	return view('admin/Rayon/index',compact('rayon'));
 
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
}
