@extends('layouts.app')

@section('content')
  <div class="app-container p-5">

    <h1>Aggiungi Artista</h1>


    {{-- $errors->any() è true se ci sono degli errori in sessione  --}}
    @if ($errors->any())
      <div class="alert alert-danger"
        role="alert">
        <ul>
          {{-- cicla gli errori --}}
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- token di verifica validità del form  --}}
    <form action="{{ route('admin.artists.store') }}"
      method="POST">
      @csrf

      <div class="mb-3">
        <label for="name"
          class="form-label">Nome</label>
        <input id="artist_name"
          value="{{ old('artist_name') }}"
          class="form-control @error('artist_name') is-invalid @enderror"
          name="artist_name"
          placeholder="Inserisci nome"
          type="text">

        @error('artist_name')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="artist_lastname"
          class="form-label">Cognome</label>
        <input id="artist_lastname"
          value="{{ old('artist_lastname') }}"
          class="form-control @error('artist_lastname') is-invalid @enderror"
          name="artist_lastname"
          placeholder="Inserisci cognome"
          type="text">

        @error('artist_lastname')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="place_of_birth"
          class="form-label">Luogo di nascita</label>
        <input id="place_of_birth"
          value="{{ old('place_of_birth') }}"
          class="form-control"
          name="place_of_birth"
          placeholder="Inserisci luogo di nascita"
          type="text">
      </div>

      <div class="mb-3">
        <label for="date_of_birth"
          class="form-label">Data di nascita</label>
        <input type="date"
          name="date_of_birth"
          id="date_of_birth"
          value="{{ old('date_of_birth') }}"
          class="form-control w-25">
      </div>

      <div class="mb-3">
        <label for="category"
          class="form-label">Categoria</label>
        <input id="category"
          value="{{ old('category') }}"
          class="form-control @error('category') is-invalid @enderror"
          name="category"
          placeholder="Inserisci categoria"
          type="text">

        @error('category')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="composition"
          class="form-label">Numero di opere</label>
        <input id="composition"
          value="{{ old('composition') }}"
          class="form-control"
          name="composition"
          placeholder="Inserisci numero di opere"
          type="text">
      </div>

      <div class="mb-3">
        <label for="alive" class="form-label">Status</label>
        <select class="form-select @error('alive') is-invalid @enderror"
          aria-label="Default select example"
          id="alive"
          {{-- value="{{ old('alive') }}" --}}
          name="alive">
          <option value="0">Defunto</option>
          <option value="1">Vivo</option>
        </select>

        @error('alive')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="btn btn-primary mt-4">Invia</button>

    </form>

  </div>

@endsection
