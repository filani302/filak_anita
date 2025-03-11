<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Termékoldal</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body class="termekek-body">
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

    <section class="hero-section2">
        <div class="hero-content">
            <h1 class="fw-bold">✨ Oszd meg aktuális termékedről a véleményed ✨</h1>
            <p class="lead">Bőrápolás. Hajápolás. Rutinok. Inspiráció.</p>
            <a href="{{ url('/termekfeltoltesek') }}" class="btn btn-custom me-3">Megosztom a termékem</a>
        </div>
    </section>
 
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
    
    

    <center><h1>Termékek</h1></center>
    <div class="container">
    <!-- Nagy doboz -->
    <div class="content-box">
        <div class="row">
            <!-- Bal oldal: szövegek -->
            <div class="col-md-8">
                <p><strong>Cím vagy termék neve</strong></p>
                <p>Termékeírás
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Maiores placeat quam neque hic impedit distinctio beatae 
                    magnam incidunt at nemo numquam eveniet necessitatibus aliquam 
                    dolores perspiciatis, dolore consectetur quidem dolorum?</p>
                </p>
            </div>
            <!-- Jobb oldal: Kép helye -->
            <div class="col-md-4">
            <img src="kephelye" alt=""> 
            <p>kép</p>         
         </div>
         <!-- Ikonok (Kedvelés, Kedvencek, Komment) -->
    
        <i class="fas fa-heart">like</i>  <!-- Kedvelés -->
        <i class="fas fa-star"></i>   <!-- Kedvencek -->
        <i class="fas fa-comment"></i> <!-- Komment -->      
    </div>
    </div>

    <div class="content-box">
        <div class="row">
            <!-- Bal oldal: szövegek -->
            <div class="col-md-8">
                <p><strong>Cím vagy termék neve</strong></p>
                <p>Termékleírás
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Maiores placeat quam neque hic impedit distinctio beatae 
                    magnam incidunt at nemo numquam eveniet necessitatibus aliquam 
                    dolores perspiciatis, dolore consectetur quidem dolorum?</p>
                </p>
            </div>
            <!-- Jobb oldal: Kép helye -->
            <div class="col-md-4">
            <img src="kephelye.jpg" alt="">  
            <p>kép</p>        
         </div>
         <!-- Ikonok (Kedvelés, Kedvencek, Komment) -->
    
        <i class="fas fa-heart">like</i>  <!-- Kedvelés -->
        <i class="fas fa-star"></i>   <!-- Kedvencek -->
        <i class="fas fa-comment"></i> <!-- Komment -->      
    </div>
    </div>
</div>
</body>
</head>