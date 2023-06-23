@extends('layout.main')

@section('content')

    <div class="container">

        <h1>Artworks</h1>

        <table class="table table-striped table-dark">

            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->artwork_name }}</td>
                        <td>{{ $artwork->artwork_year }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('artwork.show', $artwork) }}">VAI</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div>{{ $artworks->links() }}</div>

    </div>

@endsection
