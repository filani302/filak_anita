<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Rutinok</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="termekek-body">  
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
    <!-- Hero szekció -->
    <section class="hero-section2 text-center py-5">
        <div class="container">
            <h1 class="fw-bold">✨ Oszd meg a véleményed a termékekről ✨</h1>
            <p class="lead">Bőrápolás. Hajápolás. Rutinok. Inspiráció.</p>
            <a href="{{ url('/rutinfeltoltesek') }}" class="btn btn-custom me-3">Megosztom a rutinom</a>
        </div>
    </section>
    <!-- Termékek listája -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Rutinok</h1>
        <hr>
        <form class="mb-4">
    <div class="accordion" id="filterAccordion">
        <!-- Rutin Típus -->
        <div class="accordion-item border border-pink">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-white " style="background-color: #ff85a2;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Termék Típus
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body bg-light">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="hajapolas">
                        <label class="form-check-label text-pink">Hajápolási termék</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="arcapolas">
                        <label class="form-check-label text-pink">Arcápolási termék</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Allergének -->
        <div class="accordion-item border border-pink mt-2 ">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button text-white " style="background-color: #ff85a2;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    Allergének
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show">
                <div class="accordion-body bg-light">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="allergen[]" value="illatanyagok">
                        <label class="form-check-label text-pink">Illatanyagok</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="allergen[]" value="tartositoszerek">
                        <label class="form-check-label text-pink">Tartósítószerek</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="allergen[]" value="emulgealoszerek">
                        <label class="form-check-label text-pink">Emulgeálószerek</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="allergen[]" value="novenyi_kivonatok">
                        <label class="form-check-label text-pink">Növényi kivonatok és illóolajok</label>
                    </div>
                    <br>
                    <button type="button" class=" btn btn-outline-dark">Szűrés</button>
                    </div>
            </div>
        </div>
    </div>
</form>
        <!-- Termék 1 -->
        <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/ReAnLogoo.png" alt="Termék kép" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <h5><strong>Termékek nevei</strong></h5>
                    <p class="mb-2">Rutinleírás</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores placeat quam neque hic impedit distinctio beatae.</p>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-start gap-3">
                <i class="fas fa-heart"> ❤️ Like</i>
                <i class="fas fa-star"> ⭐ Kedvencek</i>
                <i class="fas fa-comment"> 💬 Komment</i>
            </div>
        </div>
        <!-- Termék 2 -->
        <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/ReAnLogoo.png" alt="Termék kép" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <h5><strong>Termékek nevei</strong></h5>
                    <p class="mb-2">Rutinleírás</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores placeat quam neque hic impedit distinctio beatae.</p>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-start gap-3">
                <i class="fas fa-heart"> ❤️ Like</i>
                <i class="fas fa-star"> ⭐ Kedvencek</i>
                <i class="fas fa-comment"> 💬 Komment</i>
            </div>
        </div>
        <!-- Termék 3 -->
        <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/ReAnLogoo.png" alt="Termék kép" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <h5><strong>Termékek nevei</strong></h5>
                    <p class="mb-2">Rutinleírás</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores placeat quam neque hic impedit distinctio beatae.</p>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-start gap-3">
                <i class="fas fa-heart"> ❤️ Like</i>
                <i class="fas fa-star"> ⭐ Kedvencek</i>
                <i class="fas fa-comment"> 💬 Komment</i>
            </div>
        </div>
    </div>
    <!-- FontAwesome ikonokhoz -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
