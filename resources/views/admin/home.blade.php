@extends('layouts.app')

@section('content')
  <div class="app-container p-5">
    <h1 class="mb-3">Dashboard</h1>

    <div class="row pt-3">
      <div class="col-12 col-xl-8">
        <div class="recently-added">
          <div class="card">
            <div class="card-header">
              <h4>Aggiunti o modificati di recente</h4>
            </div>
            @foreach ($recently_added as $key => $categories)
              <div class="card-body">
                <h5>{{ $key }}</h5>
                <table class="table table-hover align-top">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Ultima modifica</th>
                      <th scope="col">Azione</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                      <tr>
                        <td scope="row" class="w-50">
                          {{ $category->name }}
                        </td>
                        <td scope="row" class="w-25">
                          {{ date_format(date_create($category->date), 'd/m/Y') }}
                        </td>
                        <td class="w-25">
                          <a href="{{ route('admin.'.$category->getTable().'.show', $category) }}" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-pencil"></i>
                          </a>
                          <a href="#" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="app-stats">
          <div class="card">
            <div class="card-header">
              <h4>Statistiche</h4>
            </div>
            <div class="card-body">
              <ul class="list-group">
                @foreach ($count as $key => $value)
                  <li class="list-group-item">
                    <span>Totale {{ $key }}: {{ $value }}</span>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
