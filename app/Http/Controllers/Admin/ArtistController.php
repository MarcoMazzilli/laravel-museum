<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Http\Requests\ArtistRequest;
use App\Helpers\FunctionHelper;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $artists = Artist::orderBy('id', 'desc')->paginate(5);

      return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
      $form_data = $request->all();

      $str_to_slug = $form_data['artist_name'] . ' ' . $form_data['artist_lastname'];

      $form_data['slug'] = FunctionHelper::generateUniqueSlug($str_to_slug, New Artist());

      $new_artist = new Artist();

      $new_artist->fill($form_data);

      $new_artist->save();

      return redirect()->route('admin.artists.show', $new_artist);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
      return view('admin.artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistRequest $request, Artist $artist)
    {
      $form_data = $request->all();

      if($form_data['artist_name'] !== $artist->artist_name || $form_data['artist_lastname'] !== $artist->artist_lastname){
        $str_to_slug = $form_data['artist_name'] . ' ' . $form_data['artist_lastname'];

        $form_data['slug'] = FunctionHelper::generateUniqueSlug($str_to_slug, New Artist());

      }else{
        $form_data['slug'] = $artist->slug;
      }



      $artist->update($form_data);

      return redirect()->route('admin.artists.show', compact('artist'));
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
    }
}
