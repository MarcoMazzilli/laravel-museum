@extends('layouts.app')

@section('content')
  <div class="app-container p-5">
    <h3>{{ $artist->artist_name }}</h3>
    <p>{{ $artist->date_of_birth }}</p>
    <p>{{ $artist->place_of_birth }}</p>
  </div>
@endsection
