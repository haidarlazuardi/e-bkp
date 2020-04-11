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
    public function edit($id)
    {       
        $reward = reward::find(); 
        
        }
    public function update($id,Request $request)
    { 
        $this->validate($request,[
            'code_rewards' => 'required',
            'score'=>'required',
            'description'=>'required'
           ]);
           $reward=Reward::find($id);
           $reward->code_rewards = $request->code_rewards;
           $reward->score = $request->score;
           $reward->description = $request->description;
           $reward->save();
                
            return redirect()->back();

        }
}
