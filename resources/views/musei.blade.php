@extends('layout.main')

@section('content')

    <div class="container">

        <h1>Musei</h1>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Città</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nome</th>
                    <td>Città</td>
                    <td>Tipo</td>
                    <td>
                        <a class="btn btn-primary" href="#">VAI</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

@endsection
