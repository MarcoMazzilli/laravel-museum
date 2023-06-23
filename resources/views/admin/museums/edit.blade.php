@extends('layouts.app')

@section('content')
  <div class="app-container p-5">

    <h1>Modifica scheda Museo {{ $museum->museum_name }}</h1>

    {{-- $errors->any() è true se ci sono degli errori in sessione  --}}
    @if ($errors->any())
      <div class="alert alert-danger"
        role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.museums.update', $museum) }}"
      method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="museum_name"
          class="form-label">Nome</label>
        <input type="text"
          class="form-control @error('museum_name') is-invalid @enderror"
          id="museum_name"
          name="museum_name"
          placeholder="Inserisci nome"
          value="{{ old('museum_name', $museum->museum_name) }}">

        @error('museum_name')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="city"
          class="form-label">Città</label>
        <input type="text"
          class="form-control @error('city') is-invalid @enderror"
          id="city"
          name="city"
          placeholder="Inserisci città"
          value="{{ old('city', $museum->city) }}">

        @error('city')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="latitude"
          class="form-label">Latitudine</label>
        <input type="text"
          class="form-control"
          id="latitude"
          name="latitude"
          placeholder="Inserisci latitudine"
          value="{{ old('latitude', $museum->latitude) }}">
      </div>

      <div class="mb-3">
        <label for="longitude"
          class="form-label">Longitudine</label>
        <input type="text"
          class="form-control"
          id="longitude"
          name="longitude"
          placeholder="Inserisci longitudine"
          value="{{ old('longitude', $museum->longitude) }}">
      </div>

      <div class="mb-3">
        <label for="type"
          class="form-label">Tipologia</label>
        <input type="text"
          class="form-control"
          id="type"
          name="type"
          placeholder="Inserisci tipologia"
          value="{{ old('type', $museum->type) }}">
      </div>

      <div class="mb-3 text-end">
        <button type="submit"
          class="btn btn-success">Conferma le modifiche</button>
      </div>

    </form>

  </div>
@endsection
