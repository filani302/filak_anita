<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - főoldal</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

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
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

            </ul>
        </div>
    </div>

    <div class="hero-section-welcome">
        <div class="hero-content">
        </div>
    </div>

    <br>
    <section class="hero">
        <img src="/img/arc.jpg" alt="Nő arcápolási krémmel">
        <div class="text-box">
            <h2>Hatóanyagok hatása a bőrre és a hajra</h2>
            <p>Ez az oldal a felhasználók által feltöltött termékeket és rutinokat 
                gyűjti össze, ahol az összetevők is megjelennek. Így könnyen megnézheted, 
                hogy egy-egy hatóanyag milyen hatással lehet a bőrödre és a hajadra, és 
                segíthet a legjobb termékek kiválasztásában!</p>
            </div>
    </section>

    <hr>
        

<!-- Kép lapozgató (automatikusan vált) --->
<div id="termekCarousel" class="carousel slide mx-auto my-4" data-bs-ride="carousel" data-bs-interval="2000" style="width: 70%; height: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/kellekKepek/hajapolas1.webp" class="d-block w-100 rounded" alt="Termék 1">
            </div>
            <div class="carousel-item">
                <img src="/kellekKepek/hajapolas.webp" class="d-block w-100 rounded" alt="Termék 2">
            </div>
            <div class="carousel-item">
                <img src="/kellekKepek/arcapolas.webp" class="d-block w-100 rounded" alt="Termék 3">
            </div>
        </div>
        <!-- Navigációs gombok -->
        <button class="carousel-control-prev" type="button" data-bs-target="#termekCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#termekCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        

        
    </div>
      


          <section class="hero1">
        <div class="text1-box">
            <h2>Találd meg kedvenc termékeidet</h2>
            <p>Fedezd fel a gondosan válogatott szépségápolási termékeket, 
                amelyeket a közösség tölt fel! Kifinomult formulák, prémium 
                minőség és elegancia egy helyen. Válogass a legjobb termékek közül, 
                és találd meg a kedvenceidet!</p>
            </div>
            <img src="/kellekKepek/termek1.webp" alt="Nő arcápolási krémmel">

    </section>
    <footer id="lablec" class=" lablec text-center py-4 mt-5">
        <p>Csatlakozz hozzánk és adj tippet másoknak!</p>
        <p><a href="{{ url('/login') }}" class="text-light">Bejelentkezés</a> | <a href="{{ url('/registration') }}" class="text-light">Regisztráció</a></p>
        <p>Kövess minket itt is!</p>
        <p><a href="#" class="text-light">Facebook</a> | <a href="#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>
</body>
</html>
