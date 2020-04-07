<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PunishmentController extends Controller
{
    //
    public function index()
    {
    	return view('admin/Punishment/index');
 
    }
}
