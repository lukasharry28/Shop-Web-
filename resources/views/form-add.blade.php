@extends('layouts/main_movies')
@section('title', 'Form Add Movies')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        {{-- FORM ADD MOVIES DISISI--}}
        <form action="/Save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Genre</label>
                <select name="genre" class="form-control">
                    <option value="0">--Pilih Genre--</option>
                    <option value="Action">Action</option>
                    <option value="Horror">Horror</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Adventure">Adventure</option>
                </select>
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="number" min="1900" max="2100" name="year" class="form-control" required>
            </div>
            <div class="form-group">
                   <label>Poster</label>
                <input type="file" name="poster" class="form-control-file" accept="image/*">
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
@endsection

