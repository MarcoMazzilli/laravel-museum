<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use App\Http\Requests\MuseumRequest;

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
        return view('museum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuseumRequest $request)
    {
        $form_data = $request->all();

        $new_museum = new Museum();

        $new_museum->fill($form_data);

        $new_museum->save();

        // // una volta salvato il dato reindirizzo alla pagina show
        // return redirect()->route('museums.show', $new_museum);
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
    public function edit(museum $museums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, museum $museums)
    {
        //
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
