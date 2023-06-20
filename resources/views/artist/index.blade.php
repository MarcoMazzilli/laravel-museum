@extends('layout.main')

@section('content')

    <div class="container">

        <h1 class="mb-4">Artisti</h1>

        <span><a href={{ route('artist.create') }} class="btn btn-primary mb-4">Inserisci nuovo artista</a></span>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data di nascita</th>
                    <th scope="col">Luogo di nascita</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->artist_name }}</td>
                        <td>{{ $artist->date_of_birth }}</td>
                        <td>{{ $artist->place_of_birth }}</td>
                        <td>
                            <a class="btn btn-primary" href="#">VAI</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>{{ $artists->links() }}</div>

    </div>

@endsection
