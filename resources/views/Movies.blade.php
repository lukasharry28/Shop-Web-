@extends('layouts/main_movies')
@section('title', 'Movies')
@section('artikel')
<div class="card">
    <div class="card-header">
      <a href="/Movies/form-add" class="btn btn-primary"><i class="bi bi-plus-square"></i>Movies</a>
    </div>
    <div class="card-body">
      @if (session('alert'))

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('alert') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @endif
      {{-- Tabel Disini --}}
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Poster</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($mv as $idx =>$m)
          <tr>
            <td>{{ $idx+1 }}</td>
            <td>{{ $m->title }}</td>
            <td>{{ $m->genre }}</td>
            <td>{{ $m->year }}</td>
            <td>
              <img src="{{ asset('/storage/'.$m->poster) }}"
              alt="{{ $m->poster }}" height="80" width="80">
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
 </div>
@endsection
