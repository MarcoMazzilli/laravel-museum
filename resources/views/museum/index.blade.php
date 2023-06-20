@extends('layout.main')

@section('content')

    <div class="container">

        <h1>Musei</h1>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Città</th>
                    <th scope="col">Latitudine</th>
                    <th scope="col">Longitudine</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($museums as $museum)

                    <tr>
                        <td>{{ $museum->museum_name }}</td>
                        <td>{{ $museum->city }}</td>
                        <td>{{ $museum->latitude }}</td>
                        <td>{{ $museum->longitude }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('museum.show', $museum) }}">VAI</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>{{ $museums->links() }}</div>

    </div>

@endsection
