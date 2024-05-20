@extends('layouts/main_second')
@section('title', 'Produk')
@section('artikel')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Catalog Produk</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    {{-- Group Image Cards --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <img class="card-img-top"
                    src="https://images.pexels.com/photos/209206/pexels-photo-209206.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Roti Malu Malu</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Keranjang</a>
                    <a href="#" class="btn btn-warning text-light">Beli</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <img class="card-img-top"
                    src="https://images.pexels.com/photos/9506934/pexels-photo-9506934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Roti Sobek</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Keranjang</a>
                    <a href="#" class="btn btn-warning text-light">Beli</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <img class="card-img-top"
                    src="https://images.pexels.com/photos/3850997/pexels-photo-3850997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Roti Bad Soft</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Keranjang</a>
                    <a href="#" class="btn btn-warning text-light">Beli</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <img class="card-img-top"
                    src="https://images.pexels.com/photos/9596553/pexels-photo-9596553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Roti Filate Mocca</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Keranjang</a>
                    <a href="#" class="btn btn-warning text-light">Beli</a>
                </div>
            </div>
        </div>
    </div>
@endsection
