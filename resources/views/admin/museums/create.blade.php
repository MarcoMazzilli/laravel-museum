@extends('layouts.app')

@section('content')

  <div class="app-container p-5">

    <h1>Aggiungi Museo</h1>

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

    {{-- token di verifica validità del form  --}}
    <form action="{{ route('admin.museums.store') }}"
      method="POST">
      @csrf

      <div class="mb-3">
        <label for="titolo"
          class="form-label">Nome</label>
        <input id="museum_name"
          value="{{ old('museum_name') }}"
          class="form-control  @error('museum_name') is-invalid @enderror"
          name="museum_name"
          placeholder="Inserisci nome"
          type="text">

        @error('museum_name')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="city"
          class="form-label">Città</label>
        <input id="city"
          value="{{ old('city') }}"
          class="form-control @error('city') is-invalid @enderror"
          name="city"
          placeholder="Inserisci città"
          type="text">

        @error('city')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type"
          class="form-label">Tipologia</label>
        <input id="type"
          value="{{ old('type') }}"
          class="form-control"
          name="type"
          placeholder="Inserisci tipologia"
          type="text">
      </div>

      <div class="mb-3">
        <label for="latitude"
          class="form-label">Latitudine</label>
        <input id="latitude"
          value="{{ old('latitude') }}"
          class="form-control"
          name="latitude"
          placeholder="Inserisci latitudine"
          type="text">
      </div>

      <div class="mb-3">
        <label for="longitude"
          class="form-label">Longitudine</label>
        <input id="longitude"
          value="{{ old('longitude') }}"
          class="form-control"
          name="longitude"
          placeholder="Inserisci longitudine"
          type="text">
      </div>

      <button type="submit"
        class="btn btn-primary">Invia</button>

    </form>

  </div>

@endsection
