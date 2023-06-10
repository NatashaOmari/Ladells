<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $weddings=Wedding::all();
        return view('options.wedding.index',['weddings'=>$weddings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('options.wedding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>['required','min:2','max:100'],
             'image'=>['required'],
             'recipe'=>['required']
         ]);
 
         $wedding = new Wedding();
 
         $wedding->name = $request->input('name');
         $wedding->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/weddings/',$filename);
             $wedding->image = $filename;
         } else {
             return $request;
             $wedding->image = '';
         }
         $wedding->recipe = $request->input('recipe');
 
         $wedding->save();
         return redirect()->route('wedding.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $wedding=Wedding::findorFail($id);
        return view('options.wedding.edit',['wedding'=>$wedding]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $wedding=Wedding::findorFail($id);
        $request->validate([
            'name'=>['required','min:2','max:100'],
             
         ]);
         $wedding->name = $request->input('name');
         $wedding->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/weddings/',$filename);
             $wedding->image = $filename;
         } else {
             return $request;
             $wedding->image = '';
         }
         $wedding->recipe = $request->input('recipe');
         $wedding->update();
        return redirect()->route('wedding.index')->with('updateMsg','Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $wedding=Wedding::findorFail($id);
        $wedding->delete();
        return redirect()->route('wedding.index')->with('delMsg','Cake deleted successfully');
    }
}
