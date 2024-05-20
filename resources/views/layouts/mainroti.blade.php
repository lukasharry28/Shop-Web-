<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>.:Admin Royale Bread - @yield('title'):.</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-dark py-4"></div>
        </div>
    </div>
    <div class="row vh-100">
        <div class="col-md-2">
            <!-- MENU -->
            <div class="row mt-3">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ @key == 'home' ? 'active' : '' }}" id="v-pills-home-tab"
                            href="/">Home</a>
                        <a class="nav-link {{ @key == 'roti' ? 'active' : '' }}"" id="v-pills-roti-tab"
                            href="/Roti">Roti</a>
                        <a class="nav-link {{ @key == 'messages' ? 'active' : '' }}"" id="v-pills-messages-tab"
                            href="/Messages">Messages</a>
                        <a class="nav-link {{ @key == 'settings' ? 'active' : '' }}"" id="v-pills-settings-tab"
                            href="/Settings">Settings</a>
                        <a class="nav-link {{ @key == 'movies' ? 'active' : '' }}"" id="v-pills-movies-tab"
                            href="/Movies">Movies</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 bg-warning">
            <!-- ARTIKEL -->
            <div class="card mt-3">
                <div class="card-header">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/DVd7tyc/1.png"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/DDY1gvP/2.png"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/GdjmpgR/3.png"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/vzqq8qn/4.png"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/nsg6MRG/5.png"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" img src="https://i.ibb.co.com/ZSfxcrh/6.png"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- ANAK-ANAK : {HOME, PROFILE, DKK} -->
                    @yield('artikel')
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="col-md-12 bg-dark py-4">
            <p class="mb-0 text-center text-white">© 2024 Royale Bread. All rights reserved.</p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
