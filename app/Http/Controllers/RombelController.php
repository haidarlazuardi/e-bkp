<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Rombel;

class RombelController extends Controller
{
    //
    public function index()
    {
        $rombel = Rombel::all();

    	return view('admin/Rombel/index',compact('rombel'));
 
    }
    public function create(Request $request)
    {
        Rombel::create($request->all());

        return redirect()->back();
    }
}
