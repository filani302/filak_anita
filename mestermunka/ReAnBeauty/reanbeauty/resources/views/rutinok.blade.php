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
                <img src="/img/ReAnLogoo.jpg" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
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
                    Rutin Típus
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body bg-light">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="hajapolas">
                        <label class="form-check-label text-pink">Hajápolási rutinok</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="arcapolas">
                        <label class="form-check-label text-pink">Arcápolási rutinok</label>
                    </div>
                    <br>
                    <button type="button" class="btn btn-light">Szűrés</button>
                </div>
            </div>
        </div>
        
        
</form>
        <!-- Rutin -->
        
        <div class="container my-5">
    <hr>
    @if($rutins->isEmpty())
        <p class="text-center text-muted">Jelenleg még nem töltöttek fel terméket.</p>
    @else
        @foreach($rutins as $rutin)
            <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 text-center">
                        <div class="image-slider" data-product-id="{{ $rutin->id }}">
                            <img src="{{ asset($rutin->p_image) }}" alt="Termék kép" class="img-fluid rounded product-image active">
                            @if($rutin->a_image)
                                <img src="{{ asset($rutin->a_image) }}" alt="Alternatív kép" class="img-fluid rounded product-image hidden">
                                <button class="prev-btn">❮</button>
                                <button class="next-btn">❯</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <h5><strong>{{ $rutin->title }}</strong></h5>
                        <p class="mb-2">{{ $rutin->description }}</p>
                        <p class="text-muted">Feltöltötte: <strong>{{ $rutin->user->username ?? 'Ismeretlen' }}</strong></p>
                    </div>
                    <div class="mt-3 d-flex justify-content-start gap-3">
                <i class="fas fa-heart"> ❤️ Like</i>
                <a href="{{ url('/kedvencek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;"> <i class="fas fa-star"> ⭐ Kedvencek</i></a>
                <a href="{{ url('/Kommentek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;">
    <i class="fas fa-comment"></i> 💬 Komment
</a>
               
            </div>
                </div>
             
            </div>
        @endforeach
    @endif
</div>




    </div>
    <!-- FontAwesome ikonokhoz -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".image-slider").forEach(function (slider) {
            let images = slider.querySelectorAll(".product-image");
            let prevBtn = slider.querySelector(".prev-btn");
            let nextBtn = slider.querySelector(".next-btn");
            let currentIndex = 0;

            if (!images.length > 1) return; // Ha csak egy kép van, nem kell váltás

            function updateImages() {
                images.forEach((img, index) => {
                    img.classList.toggle("active", index === currentIndex);
                    img.classList.toggle("hidden", index !== currentIndex);
                });
            }

            prevBtn?.addEventListener("click", function () {
                currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
                updateImages();
            });

            nextBtn?.addEventListener("click", function () {
                currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
                updateImages();
            });

            updateImages(); // Alapértelmezett állapot
        });
    });
</script>


</body>
</html>
