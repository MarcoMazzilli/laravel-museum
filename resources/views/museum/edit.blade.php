@extends('layout.main')

@section('content')
<div class="container">

<h1>Form edit Museum</h1>


    <form action="{{route('museum.update', $museum )}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="project_name" class="form-label">Nome</label>
            <input
            type="text"
            class="form-control @error('museum_name') is-invalid @enderror"
            id="museum_name"
            name="museum_name"
            placeholder="Insert museum's name"
            value="{{old('museum_name', $museum->museum_name)}}">
        </div>

        <div class="mb-3">
            <label for="latitude" class="form-label">Latitudine</label>
            <input
            type="text"
            class="form-control @error('latitude') is-invalid @enderror"
            id="latitude"
            name="latitude"
            placeholder="Insert latitude"
            value="{{old('latitude', $museum->latitude)}}">
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitudine</label>
            <input
            type="text"
            class="form-control @error('project_name') is-invalid @enderror"
            id="longitude"
            name="longitude"
            placeholder="Insert longitude"
            value="{{old('longitude', $museum->longitude)}}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Città</label>
            <input
            type="text"
            class="form-control @error('city') is-invalid @enderror"
            id="city"
            name="city"
            placeholder="Insert city"
            value="{{old('city', $museum->city)}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input
            type="text"
            class="form-control @error('type') is-invalid @enderror"
            id="type"
            name="type"
            placeholder="Insert type"
            value="{{old('type', $museum->type)}}">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Conferma le modifiche</button>
        </div>

    </form>

</div>
@endsection
