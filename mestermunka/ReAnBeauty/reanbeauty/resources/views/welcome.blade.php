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
            </ul>
        </div>
    </div>
 
    <div class="hero-section">
        <div class="hero-content">
            <h1>Fedezd fel a szépség valódi erejét a ReAnBeauty-val!</h1>
            <p>Szépségápolás a legújabb trendek szerint. Tudd meg, hogyan érheted el a legjobb eredményeket!</p>
        </div>
    </div>
 
    <div class="container custom-block mt-5 p-4 text-center">
        <img src="img/ReAnLogoo.png" alt="ReAnBeauty Logo">
        <h2>ReAnBeauty</h2>
        <p>Fedezd fel a szépség valódi erejét a ReAnBeauty-val!</p>
        <ul class="list-unstyled">
            <li>🌟 Bőrápolás, Hajápolás, Rutinok, Ihlet</li>
            <li>💄 Legjobb arc- és hajápolási termékek.</li>
            <li>💡 Tanuld meg a bevált szépségápolási rutinokat.</li>
            <li>📸 Oszd meg saját tippjeidet és inspirálj másokat!</li>
        </ul>
    </div>
 
    <footer class="bg-dark text-light text-center py-4 mt-5">
        <p>Csatlakozz hozzánk és adj tippet másoknak!</p>
        <p><a href="{{ url('/login') }}" class="text-light">Bejelentkezés</a> | <a href="{{ url('/registration') }}" class="text-light">Regisztráció</a></p>
        <p><a href="#" class="text-light">Facebook</a> | <a href="#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>
</body>
</html>
 