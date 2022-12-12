<?php

namespace App\Http\Controllers;

use App\Models\violations;
use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $violations = violations::all();
        return view ('violations.violations',['violations'=>$violations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $violations = violations::all();
        return view('violations.violations-create', ['violations'=> $violations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        violations::create($input);

        return redirect('violations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $violations = violations::findOrFail($id);
        return view('violations.violations-show', ['violations'=> $violations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $violations = violations::findOrFail($id);
        return view('violations.violations-edit', ['violations'=> $violations]);
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
        $violations = violations::findOrFail($id);
        $violations->update($request->all());
        
        return redirect('violations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $violations = violations::findorfail($id);
        $violations->delete();

        return redirect('violations');
    }
}
