@extends('layout.main')

@section('content')
<div class="container">

<h1>Form edit Artist</h1>


    <form action="{{route('artist.update', $artist )}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="artist_name" class="form-label">Nome</label>
            <input
            type="text"
            class="form-control @error('artist_name') is-invalid @enderror"
            id="artist_name"
            name="artist_name"
            placeholder="Insert artist's name"
            value="{{old('artist_name', $artist->artist_name)}}">
        </div>

        <div class="mb-3">
            <label for="artist_lastname" class="form-label">Cognome</label>
            <input
            type="text"
            class="form-control @error('artist_lastname') is-invalid @enderror"
            id="artist_lastname"
            name="artist_lastname"
            placeholder="Insert lastname"
            value="{{old('artist_lastname', $artist->artist_lastname)}}">
        </div>

        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Luogo di nascita</label>
            <input
            type="text"
            class="form-control @error('place_of_birth') is-invalid @enderror"
            id="place_of_birth"
            name="place_of_birth"
            placeholder="Insert place of birth"
            value="{{old('place_of_birth', $artist->place_of_birth)}}">
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Data di nascita</label>
            <input
            type="text"
            class="form-control @error('date_of_birth') is-invalid @enderror"
            id="date_of_birth"
            name="date_of_birth"
            placeholder="Insert format YYYY/MM/DD"
            value="{{old('date_of_birth', $artist->date_of_birth)}}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input
            type="text"
            class="form-control @error('category') is-invalid @enderror"
            id="category"
            name="category"
            placeholder="Insert category"
            value="{{old('category', $artist->category)}}">
        </div>

        <div class="mb-3 w-25">
            <label for="alive">Status</label>
            <select id="alive" name="alive" class="form-select" aria-label="Default select example">
                <option selected value="1">Vivo</option>
                <option value="0">Defunto</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="composition" class="form-label">Numero di opere</label>
            <input
            type="text"
            class="form-control @error('composition') is-invalid @enderror"
            id="composition"
            name="composition"
            placeholder="Insert number of composition"
            value="{{old('composition', $artist->composition)}}">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Conferma le modifiche</button>
        </div>

    </form>

</div>
@endsection
