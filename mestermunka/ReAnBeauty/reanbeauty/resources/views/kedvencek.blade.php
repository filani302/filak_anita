<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Kedvencek</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/af0adec3b9.js" crossorigin="anonymous"></script>
</head>
<body class="rutin-body"> <!-- Itt adtuk hozzá az osztályt -->
<nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/profil') }}">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNav">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menü</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Főoldal</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/welcome') }}">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/termekek') }}">Termékek</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/rutinok') }}">Rutinok</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="btn btn-dark w-100 mt-2" href="{{ url('/registration') }}">Csatlakozz most</a></li>
            </ul>
        </div>
    </div>

    <center><h1>Kedvenceim</h1></center>
    <hr>

    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/skinFokep.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Termék neve</h5>
        <p class="card-text">Termékről szóló leírás</p>
        <i id="kuka" class="fa-solid fa-trash"></i>

      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/skinFokep.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Termék neve</h5>
        <p class="card-text">Termékről szóló leírás</p>
        <i id="kuka" class="fa-solid fa-trash"></i>

      </div>
    </div>
  </div>
</div>




    </body>
    </head>