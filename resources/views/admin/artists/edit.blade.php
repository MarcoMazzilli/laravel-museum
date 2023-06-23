@extends('layouts.app')

@section('content')
<div class="app-container p-5">

  <h1>Modifica scheda Artista {{ $artist->artist_name . ' ' .  $artist->artist_lastname }}</h1>

    {{-- $errors->any() è true se ci sono degli errori in sessione  --}}
  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
    <ul>
        {{-- cicla gli errori --}}
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
  @endif

  <form action="{{route('admin.artists.update', $artist )}}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
          <label for="artist_name" class="form-label">Nome</label>
          <input
          type="text"
          class="form-control @error('artist_name') is-invalid @enderror"
          id="artist_name"
          name="artist_name"
          placeholder="Inserisci nome"
          value="{{old('artist_name', $artist->artist_name)}}">

        @error('artist_name')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
          <label for="artist_lastname" class="form-label">Cognome</label>
          <input
          type="text"
          class="form-control @error('artist_lastname') is-invalid @enderror"
          id="artist_lastname"
          name="artist_lastname"
          placeholder="Inserisci cognome"
          value="{{old('artist_lastname', $artist->artist_lastname)}}">

        @error('artist_lastname')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
          <label for="place_of_birth" class="form-label">Luogo di nascita</label>
          <input
          type="text"
          class="form-control"
          id="place_of_birth"
          name="place_of_birth"
          placeholder="Inserisci luogo di nascita"
          value="{{old('place_of_birth', $artist->place_of_birth)}}">
      </div>

      <div class="mb-3">
          <label for="date_of_birth" class="form-label">Data di nascita</label>
          <input type="date"
          name="date_of_birth"
          id="date_of_birth"
          value="{{ old('date_of_birth', $artist->date_of_birth) }}"
          class="form-control w-25">
      </div>

      <div class="mb-3">
          <label for="category" class="form-label">Categoria</label>
          <input
          type="text"
          class="form-control @error('category') is-invalid @enderror"
          id="category"
          name="category"
          placeholder="Inserisci categoria"
          value="{{old('category', $artist->category)}}">

        @error('category')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="composition" class="form-label">Numero di opere</label>
        <input
        type="text"
        class="form-control"
        id="composition"
        name="composition"
        placeholder="Inserisci numero di opere"
        value="{{old('composition', $artist->composition)}}">
    </div>

      <div class="mb-3 w-25">
        <label for="alive" class="form-label">Status</label>
        {{-- @dd($artist->alive) --}}
        <select class="form-select @error('alive') is-invalid @enderror"
          aria-label="Default select example"
          id="alive"
          {{-- value="{{ old('alive', $artirst->alive) }}" --}}
          name="alive">
          <option value="0">Defunto</option>
          <option value="1">Vivo</option>
        </select>

        @error('alive')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>



      <div class="mb-3 text-end">
          <button type="submit" class="btn btn-success">Conferma le modifiche</button>
      </div>

  </form>

</div>
@endsection
