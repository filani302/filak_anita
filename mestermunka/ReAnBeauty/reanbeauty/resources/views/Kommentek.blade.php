<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hozzászólás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="komment-body">


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menü (Mobilhoz) -->
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
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

            </ul>
        </div>
    </div>
    
<br>
<br>


<div class="content-box p-4 shadow-sm rounded bg-light mb-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/ReAnLogoo.png" alt="Termék kép" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <h5><strong>Termék neve</strong></h5>
                    <p class="mb-2">Termékleírás</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores placeat quam neque hic impedit distinctio beatae.</p>
                </div>

                


                
                <div class="container mt-5" x-data="{ hozzaszolasLathato: false }">
    <!-- Gomb a hozzászólás mező megjelenítésére -->
    <button class="btn btn-primary bg-dark" @click="hozzaszolasLathato = !hozzaszolasLathato">
        Hozzászólás írása
    </button>

    <!-- Hozzászólás mező -->
    <div x-show="hozzaszolasLathato" class="mt-3 hozzaszolas-doboz p-4 border rounded shadow">
        <h3>Hozzászólás</h3>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Felhasználó neve" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Megjegyzést teszek" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100">Küldés</button>
        </form>
    </div>
</div>

                <div class="hozzaszolasok-div">
                    <h1>Hozzászólások</h1>
                    <p>Itt jelennek meg a tartalomhoz kapcsolodó hozzászólások amit a felhasznalók adnak</p>
                
                    <div class="marMeglevoKomment">
                    <h3>Felhasználó neve</h3>
                    <p>Felhasználó hozzászólása</p>
                    </div>
                </div>



</body>
</html>
