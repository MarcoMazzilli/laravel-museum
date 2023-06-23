@extends('layout.main')

@section('content')

<main>
    <div class="container">
            <div>
                <h3>{{ $artwork->artwork_name }}</h3>
                <img src="{{ $artwork->artwork_image }}" alt="">
                <p>{{ $artwork->artwork_description }}</p>
                <p>{{ $artwork->artwork_year }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
