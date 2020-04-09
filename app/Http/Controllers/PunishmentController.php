<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Punishment;
class PunishmentController extends Controller
{
    //
    public function index()
    {
        $punishment = Punishment::all();


    	return view('admin/Punishment/index',compact('punishment'));
 
    }


    public function create(Request $request)
    {
        Punishment::create($request->all());
        return redirect()->back();
    }
}
