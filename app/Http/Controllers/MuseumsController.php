<?php

namespace App\Http\Controllers;

use App\Models\museum;
use Illuminate\Http\Request;

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->paginate(5);
        return view('museum.index', compact('museums'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function show(museum $museums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function edit(museum $museum)
    {
        return view('museum.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, museum $museum)
    {
        $form_data = $request->all();
        $museum->update($form_data);

        return redirect()->route('museum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\museum  $museums
     * @return \Illuminate\Http\Response
     */
    public function destroy(museum $museums)
    {
        //
    }
}
