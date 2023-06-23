@extends('layout.main')

@section('content')

<main>
    <div class="container">
        <div class="container">
            <div>
                <h3>{{ $artist->artist_name }}</h3>
                <p>{{ $artist->date_of_birth }}</p>
                <p>{{ $artist->place_of_birth }}</p>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
