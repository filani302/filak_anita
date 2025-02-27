<!doctype html>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="#">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#">Profil</a></li>
                    <li class="nav-item"><a class="btn btn-custom ms-2" href="{{ url('/login') }}">Csatlakozz most</a></li>
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
                <li class="nav-item"><a class="nav-link" href="#">Termékek</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rutinok</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                <a href="{{ url('/registration') }}" class="btn btn-custom">Csatlakozz most</a>
                </ul>
        </div>
    </div>


    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Regisztráció</h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('registration') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="telefonszam" class="form-label">Telefonszám</label>
                        <input type="text" class="form-control" id="telefonszam" name="phone_number" required>
                    </div>

                    <div class="mb-3">
                        <label for="felhasznalonev" class="form-label">Felhasználónév</label>
                        <input type="text" class="form-control" id="felhasznalonev" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email cím</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jelszo" class="form-label">Jelszó</label>
                        <input type="password" class="form-control" id="jelszo" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="jelszo" class="form-label">Jelszó ismétlése</label>
                        <input type="password" class="form-control" id="jelszo_ismetles" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary bg-dark" >Regisztrálok!</button>

                </form>
            </div>
        </div>
    </div>