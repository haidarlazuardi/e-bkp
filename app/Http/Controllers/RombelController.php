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

    public function delete($id)
    {
        $rombel = Rombel::find($id);
        $rombel->delete($rombel);

        return redirect()->back();
        }
        public function edit($id)
    {       
        $rombel = Rombel::find(); 
        
        }
    public function update($id,Request $request)
    { 
        $this->validate($request,[
            'rombel' => 'required',
           ]);
           $rombel=Rombel::find($id);
           $rombel->rombel = $request->rombel;
           $rombel->save();
                
            return redirect()->back();

        }
}
