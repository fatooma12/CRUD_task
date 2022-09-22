<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainner;

class TrainnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainner=Trainner::all();
        return view('trainners.index')->with('trainners',$trainner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Trainner::create($input);
        return redirect('trainner')->with('falash_message','Trainner Added Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainner=Trainner::find($id);
        return view('trainners.show')->with('trainners',$trainner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainner=Trainner::find($id);
        return view('trainners.edit')->with('trainners',$trainner);
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
        $trainner=Trainner::find($id);
        $input=$request->all();
        $trainner->update($input);
        return redirect('trainner')->with('flash_message','Trainner Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trainner::destroy($id);
        return redirect('trainner')->with('flash_message','Trainner Deleted Successfully');
    }
}
