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
                <img src="/img/ReAnLogoo.jpg" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/profil') }}">Profil</a></li> 
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>
 

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
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

            </ul>
        </div>
    </div>

    <div class="hero-section-welcome">
        <div class="hero-content">
        </div>
    </div>

   
        


      


    


    <div class="container mt-5 position-relative">
    <div class="row align-items-center">
        <!-- Könyvespolc kép -->
        <div class="col-md-6">
            <div class="position-relative">
                <img src="/kellekKepek/fooldal-arc.jpg" class="img-fluid rounded shadow-lg" alt="Könyvesbolt belső">
            </div>
        </div>

        <!-- Bemutatkozás szövegdoboz -->
        <div class="col-md-6">
            <div class="bemutatkozo-doboz">
                <h2 class="fw-bold text-danger">ReAnBeauty</h2>
                <p>
                Ez az oldal a felhasználók által feltöltött termékeket és rutinokat gyűjti össze, ahol az összetevők is megjelennek. Így könnyen megnézheted, hogy egy-egy hatóanyag milyen hatással lehet a bőrödre és a hajadra, és segíthet a legjobb termékek kiválasztásában!                </p>
               <center> <a href="{{ url('/TudjmegTobbet') }}" class="btn btn-danger w-50">Rólunk</a></center>
            </div>
        </div>
    </div>
</div>



<!-- Kép lapozgató (automatikusan vált) --->
<br>
<hr>
<br>

<br>
<h3 class="szepBor">Szép bőr, magabiztos kisugárzás!</h3>
<div id="termekCarousel" class="carousel slide mx-auto my-4" data-bs-ride="carousel" data-bs-interval="2000" style="width: 50%; height: auto;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/kellekKepek/cosmos1.jpg" class="d-block w-100 rounded" alt="Termék 1">
            </div>
          
            <div class="carousel-item">
                <img src="/kellekKepek/cosmos2.jpg" class="d-block w-100 rounded" alt="Termék 3">
            </div>
            <div class="carousel-item">
                <img src="/kellekKepek/cosmos3.jpg" class="d-block w-100 rounded" alt="Termék 3">
            </div>
            
           
        </div>



</div>


       <div class="container my-5">
    <h2 class="text-center mb-4 text-danger">Érdekes olvasnivalók a bőrápolás világából</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="kartya shadow-sm mb-4">
                <div class="kartya-torzs">
                <h5 class="kartya-cim">Hogyan alakíts ki hatékony bőrápolási rutint?</h5>
                <p class="kartya-szoveg">
                    Egy jó bőrápolási rutin három alappillérre épül: tisztítás, hidratálás és védelem.  
                    Kezdd egy gyengéd arctisztítóval, majd használj bőrtípusodnak megfelelő hidratálót.  
                    Napközben mindig alkalmazz fényvédőt, hogy megelőzd a bőr idő előtti öregedését és a károsodást.  
                </p>
                </div>
                <img src="/kellekKepek/rutin.jpg" alt="Bőrápolási rutin" class="img-fluid w-100">
            </div>
        </div>
        <div class="col-md-4">
            <div class="kartya shadow-sm mb-4">
                <div class="kartya-torzs">
                <h5 class="kartya-cim">5 gyakori hiba a bőrápolásban</h5>
                <p class="kartya-szoveg">Sokan hajlamosak hibázni a bőrápolás során anélkül, hogy tudnák. Ilyenek lehetnek a nem megfelelő termékek használata vagy a rutin elhanyagolása. Ismerd meg a leggyakoribb hibákat, hogy elkerüld őket és hatékonyabb

                </div>
                <img src="/kellekKepek/rutin1.jpg" alt="Bőrápolási hibák" class="img-fluid w-100">
            </div>
        </div>
        <div class="col-md-4">
            <div class="kartya shadow-sm mb-4">
                <div class="kartya-torzs">
                <h5 class="kartya-cim">Milyen összetevőket kerülj a bőrápolásban?</h5>
                <p class="kartya-szoveg">Bizonyos bőrápoló összetevők többet ártanak, mint használnak. Érdemes tisztában lenni ezekkel, hogy elkerüld őket, és tudatosan válassz olyan termékeket, amelyek valóban segítenek a bőröd egészségének megőrzésében.</p>

                </div>
                <img src="/kellekKepek/rutin2.jpg" alt="Káros összetevők" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

    <footer id="lablec" class=" lablec text-center py-4 mt-5">
        <p>Kövess minket itt is!</p>
        <p><a href="https://www.facebook.com/profile.php?id=61574567735162" class="text-light">Facebook</a> | <a href="https://www.instagram.com/reanbeautyofficial2025/?igsh=MTk3N2VoZTBvYXVpNA%3D%3D#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>
</body>
</html>
