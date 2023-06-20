@extends('layout.main')

@section('content')

    <div class="container">
            <div>
                <h3>{{ $museum->museum_name }}</h3>
                <p>{{ $museum->city }}</p>
                <p>{{ $museum->latitude }}</p>
                <p>{{ $museum->longitude }}</p>
            </div>
        </div>
    </div>

@endsection
