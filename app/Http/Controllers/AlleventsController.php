<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Allevents;
use Illuminate\Http\Request;

class AlleventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alleventss=Allevents::all();
        return view('options.allevents.index',['alleventss'=>$alleventss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('options.allevents.create');
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
 
         $allevents = new Allevents();
 
         $allevents->name = $request->input('name');
         $allevents->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/allevents/',$filename);
             $allevents->image = $filename;
         } else {
             return $request;
             $allevents->image = '';
         }
         $allevents->recipe = $request->input('recipe');
 
         $allevents->save();
         return redirect()->route('allevents.index');
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
        $allevents=Allevents::findorFail($id);
        return view('options.allevents.edit',['allevents'=>$allevents]);
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
        $allevents=Allevents::findorFail($id);
        $request->validate([
            'name'=>['required','min:2','max:100'],
             
         ]);
        $allevents->name = $request->input('name');
         $allevents->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/allevents/',$filename);
             $allevents->image = $filename;
         } else {
             return $request;
             $allevents->image = '';
         }
         $allevents->recipe = $request->input('recipe');
         $allevents->update();
        return redirect()->route('allevents.index')->with('updateMsg','Entry updated successfully');
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
        $allevents=Allevents::findorFail($id);
        $allevents->delete();
        return redirect()->route('allevents.index')->with('delMsg','Cake deleted successfully');
    }
}
