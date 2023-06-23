<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Museum;
use App\Models\Artwork;


class DashController extends Controller
{
    public function index() {

      $recently_added = [
        'Musei' => Museum::orderBy('id', 'desc')->take(3)->get(['museums.*', 'museum_name AS name', 'updated_at AS date']),
        'Artisti' => Artist::orderBy('id', 'desc')->take(3)->get(['artists.*', 'artist_name AS name', 'updated_at AS date']),
        'Opere d\'arte' => Artwork::orderBy('id', 'desc')->take(3)->get(['artworks.*', 'artwork_name AS name', 'updated_at AS date'])
      ];

      $count = [
        'Musei' => Museum::all()->count(),
        'Artisti' => Artist::all()->count(),
        'Opere d\'arte' => Artwork::all()->count()
      ];

      return view('admin.home', compact('recently_added', 'count'));
    }
}
