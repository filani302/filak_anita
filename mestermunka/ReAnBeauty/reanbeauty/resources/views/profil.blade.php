<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty Felhasználói profil</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>   
</head>
<body class="profil-body">
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.jpg"class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

                    <form  action="{{ route('logout') }}" method="POST">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/fooldal') }}">Kijelentkezés</a></li>
                    </form>
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
            <li class="nav-item"><a class="nav-link" href="{{ url('/welcome') }}">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/termekek') }}">Termékek</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/rutinok') }}">Rutinok</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

            </ul>
        </div>
    </div>
 

    <div class="container-lg mt-5">
    <h2 class="text-center mb-5">Felhasználói profil</h2>
    <br>
    <div class="row justify-content-center align-items-center" style="height: 100%;">
        <div class="col-md-8 col-lg-6">
            <div class="card p-3 mb-3 shadow-sm text-dark">
                <form action="{{ route('profil.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-5" >
                        <label for="name" class="form-label"><strong>Név:</strong></label>
                        <input type="text" class="form-control bg-transparent w-100" id="name" name="name" value="{{ old('name', $user->username) }}">
                    </div>

                    <div class="mb-5" >
                        <label for="email" class="form-label"><strong>Email:</strong></label>
                        <input type="email" class="form-control bg-transparent w-100" id="email" name="email" value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="form-label"><strong>Telefon:</strong></label>
                        <input type="text" class="form-control bg-transparent w-100" id="phone" name="phone" value="{{ old('phone', $user->phone_number) }}">
                    </div>

                    <button type="submit" class="btn btn-primary bg-dark w-100">Mentés</button>
                </form>
            </div>
        </div>
    </div>
</div>




</body>

</html>