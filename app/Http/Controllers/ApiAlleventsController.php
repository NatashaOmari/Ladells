<?php

namespace App\Http\Controllers;
use App\Models\Allevents;
use Illuminate\Http\Request;

class ApiAlleventsController extends Controller
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
        return $alleventss;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            
        ]);
        $allevents = new Allevents();
 
         $allevents->name = $request->input('name');
         $allevents->user_id=$request->input ('user_id');
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
         return 'cake saved';
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
        $allevents=Allevents::findorFail($id);
        return $allevents;
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
         $allevents->user_id=$request->input ('user_id');
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
         return 'cake updated successfully';
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
        return "cake deleted";
    }
}
