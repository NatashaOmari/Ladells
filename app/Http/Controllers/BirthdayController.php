<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Birthday;

class BirthdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $birthdays=Birthday::all();
        return view('options.birthday.index',['birthdays'=>$birthdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('options.birthday.create');
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

        $birthday = new Birthday();

        $birthday->name = $request->input('name');
        $birthday->user_id=Auth::user()->id;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/birthdays/',$filename);
            $birthday->image = $filename;
        } else {
            return $request;
            $birthday->image = '';
        }
        $birthday->recipe = $request->input('recipe');

        $birthday->save();
        return redirect()->route('birthday.index');
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
        $birthday=Birthday::findorFail($id);
        return view('options.birthday.edit',['birthday'=>$birthday]);
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
        $birthday=Birthday::findorFail($id);
        $request->validate([
            'name'=>['required','min:2','max:100'],
             
         ]);
         $birthday->name = $request->input('name');
         $birthday->user_id=Auth::user()->id;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/birthdays/',$filename);
            $birthday->image = $filename;
        } else {
            return $request;
            $birthday->image = '';
        }
        $birthday->recipe = $request->input('recipe');
        $birthday->update();
        return redirect()->route('birthday.index')->with('updateMsg','Entry updated successfully');
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
        $birthday=Birthday::findorFail($id);
        $birthday->delete();
        return redirect()->route('birthday.index')->with('delMsg','Cake deleted successfully');
    }
}
