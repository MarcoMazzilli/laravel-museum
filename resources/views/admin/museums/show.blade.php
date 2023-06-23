@extends('layouts.app')

@section('content')
  <div class="app-container p-5">

    <h3>{{ $museum->museum_name }}</h3>
    <p>{{ $museum->city }}</p>
    <p>{{ $museum->latitude }}</p>
    <p>{{ $museum->longitude }}</p>

  </div>
@endsection
