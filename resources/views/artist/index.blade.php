@extends('layout.main')

@section('content')

    <div class="container">

        <h1>Artisti</h1>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data di nascita</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nome</th>
                    <td>Data di nascita</td>
                    <td>Categoria</td>
                    <td>
                        <a class="btn btn-primary" href="#">VAI</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection
