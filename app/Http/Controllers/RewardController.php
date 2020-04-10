<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reward;

class RewardController extends Controller
{
    //
    public function index()
    {
        $reward = Reward::all();
        

    	return view('admin/Reward/index', compact('reward'));
 
    }

    public function create(Request $request)
    {
        Reward::create($request->all());
        return redirect()->back();
    }

    public function delete($id)
    {
        $reward = Reward::find($id);
        $reward->delete($reward);

        return redirect()->back();
        }
}
