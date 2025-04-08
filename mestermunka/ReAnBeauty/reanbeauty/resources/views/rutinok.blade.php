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
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>


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
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

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

    <!-- Rutinok listája -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Rutinok</h1>

        <form action="{{ route('rutins.index') }}" method="GET" class="mb-4">
            <div class="accordion" id="filterAccordion">
                <div class="accordion-item border border-pink">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-white" style="background-color: #ff85a2;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Rutin Típus
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body bg-light">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="type[]" value="Hajápolás" {{ in_array('Hajápolás', request()->get('type', [])) ? 'checked' : '' }}>
                                <label class="form-check-label text-pink">Hajápolási rutinok</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="type[]" value="Bőrápolás" {{ in_array('Bőrápolás', request()->get('type', [])) ? 'checked' : '' }}>
                                <label class="form-check-label text-pink">Arcápolási rutinok</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-light">Szűrés</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @if($rutins->isEmpty())
            <p class="text-center text-muted">Jelenleg még nem töltöttek fel rutint.</p>
        @else
            @foreach($rutins as $rutin)
                <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 text-center">
                            <div class="image-slider" data-rutin-id="{{ $rutin->id }}">
                                <img src="{{ asset($rutin->p_image) }}" alt="Rutin kép" class="img-fluid rounded rutin-image active">
                                @if($rutin->a_image)
                                    <img src="{{ asset($rutin->a_image) }}" alt="Alternatív kép" class="img-fluid rounded rutin-image hidden">
                                    <button class="prev-btn">❮</button>
                                    <button class="next-btn">❯</button>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <h5><strong>{{ $rutin->title }}</strong></h5>
                            <p class="mb-2">{{ $rutin->description }}</p>
                            <p class="text-muted">Feltöltötte: <strong>{{ $rutin->user->username ?? 'Ismeretlen' }}</strong></p>

                            <!-- Gombok -->
<div class="mt-3 d-flex flex-wrap gap-2">
    @php
        $userLiked = App\Models\Likes::where('user_id', auth()->id())->where('rutin_id', $rutin->id)->exists();
        $likeCount = App\Models\Likes::where('rutin_id', $rutin->id)->count();
    @endphp

    <form action="{{ route('like.toggle') }}" method="POST">
        @csrf
        <input type="hidden" name="rutin_id" value="{{ $rutin->id }}">
        <button type="submit" class="btn {{ $userLiked ? 'btn-danger' : 'btn-outline-danger' }} d-flex align-items-center gap-2 rounded-pill" style="border-radius: 50px;">
            {!! $userLiked ? '💔 Unlike' : '❤️ Like' !!}
            <span>{{ $likeCount }}</span>
        </button>
    </form>

    <form action="{{ route('favourites.store') }}" method="POST">
        @csrf
        <input type="hidden" name="rutin_id" value="{{ $rutin->id }}">
        <button type="submit" class="btn btn-outline-warning d-flex align-items-center gap-2 rounded-pill" style="border-radius: 50px;">
            ⭐ Kedvencek
        </button>
    </form>

    <a href="{{ route('kommentekrutin.show', $rutin) }}" class="btn btn-outline-info d-flex align-items-center gap-2 rounded-pill" style="border-radius: 50px;">
        💬 Komment
    </a>
</div>
                            

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <!-- FontAwesome ikonokhoz -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Képek váltása -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".image-slider").forEach(function (slider) {
                let images = slider.querySelectorAll(".rutin-image");
                let prevBtn = slider.querySelector(".prev-btn");
                let nextBtn = slider.querySelector(".next-btn");
                let currentIndex = 0;

                if (images.length < 2) return;

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

                updateImages();
            });
        });
    </script>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4 mt-5">
        <p>Kövess minket itt is!</p>
        <p><a href="#" class="text-light">Facebook</a> | <a href="#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>
</body>
</html>
