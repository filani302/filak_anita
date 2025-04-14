<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Kedvencek</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/af0adec3b9.js" crossorigin="anonymous"></script>
</head>
<body class="rutin-body"> <!-- Itt adtuk hozzá az osztályt -->
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
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

                </nav>
<div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNav">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menü</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Főoldal</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/termekek') }}">Termékek</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/rutinok') }}">Rutinok</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

        </ul>
    </div>
</div>
@forelse($favourites as $favourite)
<div class="card mb-3 " style="max-width: 540px; height:300px" >
        <div class="row g-0">
            <div class="col-md-4 text-center">
                @if ($favourite->product)
                    <img src="{{ asset($favourite->product->p_image) }}" class="img-fluid rounded-start" alt="Product Image">
                @elseif ($favourite->rutin)
                    <img src="{{ asset($favourite->rutin->p_image) }}" class="img-fluid rounded-start" alt="Rutin Image">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    @if ($favourite->product)
                        <h5 class="card-title">{{ $favourite->product->title }}</h5>
                        <p class="card-text">{{ $favourite->product->description }}</p>
                    @elseif ($favourite->rutin)
                        <h5 class="card-title">{{ $favourite->rutin->title }}</h5>
                        <p class="card-text">{{ $favourite->rutin->description }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@empty
    <p>Nincsenek kedvenc termékeid vagy rutinjaid.</p>
@endforelse


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".image-slider").forEach(function (slider) {
            let images = slider.querySelectorAll(".product-image");
            let prevBtn = slider.querySelector(".prev-btn");
            let nextBtn = slider.querySelector(".next-btn");
            let currentIndex = 0;

            if (images.length <= 1) return;

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".add-to-favourites").click(function (e) {
            e.preventDefault();

            let productId = $(this).data("product-id");
            let rutinId = $(this).data("rutin-id");

            $.ajax({
                url: "{{ route('favourites.store') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId,
                    rutin_id: rutinId
                },
                success: function (response) {
                    alert(response.message); // Visszajelzés a felhasználónak
                    location.reload(); // Az oldal frissítése a változások megjelenítéséhez
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message); // Ha már kedvenc, akkor hibaüzenet
                }
            });
        });
    });
</script>



<style>
    .hidden { display: none; }
    .product-image { width: 100%; transition: opacity 0.3s ease-in-out; }
    .image-slider { position: relative; display: inline-block; }
    .prev-btn, .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.7);
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    .prev-btn { left: 10px; }
    .next-btn { right: 10px; }
</style>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
