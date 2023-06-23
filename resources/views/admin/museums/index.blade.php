@extends('layouts.app')

@section('content')
  <div class="app-container p-5">

    <h1 class="mb-4">Musei</h1>

    <span>
      <a href={{ route('admin.museums.create') }}
        class="btn btn-primary mb-4">Inserisci nuovo museo</a>
    </span>

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
              <a class="btn btn-primary" href="{{ route('admin.museums.show', $museum) }}"><i class="fa-regular fa-eye"></i></a>
              <a class="btn btn-warning" href="{{ route('admin.museums.edit', $museum) }}"><i class="fa-solid fa-pencil"></i></a>
              <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div>{{ $museums->links() }}</div>

  </div>
@endsection
