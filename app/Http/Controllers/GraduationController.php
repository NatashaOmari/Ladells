<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Graduation;
use Illuminate\Http\Request;

class GraduationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $graduations=Graduation::all();
        return view('options.graduation.index',['graduations'=>$graduations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('options.graduation.create');
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
 
         $graduation = new Graduation();
 
         $graduation->name = $request->input('name');
         $graduation->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/graduations/',$filename);
             $graduation->image = $filename;
         } else {
             return $request;
             $graduation->image = '';
         }
         $graduation->recipe = $request->input('recipe');
 
         $graduation->save();
         return redirect()->route('graduation.index');
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
        $graduation=Graduation::findorFail($id);
        return view('options.graduation.edit',['graduation'=>$graduation]);
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
        $graduation=Graduation::findorFail($id);
        $request->validate([
            'name'=>['required','min:2','max:100'],
             
         ]);
         $graduation->name = $request->input('name');
         $graduation->user_id=Auth::user()->id;
         if ($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/graduations/',$filename);
             $graduation->image = $filename;
         } else {
             return $request;
             $graduation->image = '';
         }
         $graduation->recipe = $request->input('recipe');
         $graduation->update();
        return redirect()->route('graduation.index')->with('updateMsg','Entry updated successfully');
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
        $graduation=Graduation::findorFail($id);
        $graduation->delete();
        return redirect()->route('graduation.index')->with('delMsg','Cake deleted successfully');
    }
}
