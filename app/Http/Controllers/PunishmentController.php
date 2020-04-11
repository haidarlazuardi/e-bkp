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

    public function delete($id)
    {
        $punishment = Punishment::find($id);
        $punishment->delete($punishment);

        return redirect()->back();
        }
    public function edit($id)
    {       
        $punishment = Punishment::find(); 
        
        }
    public function update($id,Request $request)
    { 
        $this->validate($request,[
            'code_punishment' => 'required',
            'score'=>'required',
            'description'=>'required'
           ]);
           $punishment= Punishment::find($id);
           $punishment->code_punishment = $request->code_punishment;
           $punishment->score = $request->score;
           $punishment->description = $request->description;
           $punishment->save();
                
            return redirect()->back();

        }
}
