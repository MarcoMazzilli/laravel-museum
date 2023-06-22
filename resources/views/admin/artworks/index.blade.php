@extends('layouts.app')

@section('content')
  <div class="app-container p-5">

    <h1 class="mb-4">Opere d'Arte</h1>

    {{-- <span><a href={{ route('admin.artworks.create') }} class="btn btn-primary mb-4">Inserisci nuova opera d'Arte</a></span> --}}

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
            {{-- <td>
              <a class="btn btn-primary" href="{{ route('admin.artworks.show', $artwork) }}"><i class="fa-regular fa-eye"></i></a>
              <a class="btn btn-warning" href="{{ route('admin.artworks.edit', $artwork) }}"><i class="fa-solid fa-pencil"></i></a>
              <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash-can"></i></a>
            </td> --}}
          </tr>
        @endforeach
      </tbody>

    </table>

    <div>{{ $artworks->links() }}</div>

  </div>
@endsection
