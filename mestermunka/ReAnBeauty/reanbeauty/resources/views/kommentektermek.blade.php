<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hozzászólás</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="komment-body">


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
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/feltoltott') }}">Posztjaim</a></li>

            </ul>
        </div>
    </div>
    
<br>
<br>

<!-- Komment szekció -->
<div class="container mt-5">
    <div class="mb-4">
        <h1>{{ $product->title }}</h1>
        <img src="{{ asset($product->p_image) }}" alt="Termék kép" class="img-fluid">
        <p>{{ $product->description }}</p>
        <hr>
        <h3>Hozzászólások:</h3>

        <!-- Kommentek megjelenítése -->
        @foreach ($comments as $comment)
            <div class="border p-3 my-2">
                <strong><p>{{ $comment->user->username }}</p></strong> 
                <br>
                <p>{{ $comment->description }}</p>
            </div>
        @endforeach

        <!-- Hozzászólás hozzáadása -->
        @if (!$product->hasCommentByUser(auth()->id())) <!-- Ha még nincs hozzászólás a felhasználótól -->
            <form action="{{ route('comments.product.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <textarea name="comment" class="form-control" placeholder="Írj egy hozzászólást..." required></textarea>
                <button type="submit" class="btn btn-primary mt-2">Küldés</button>
            </form>
        @else
            <p>Jelenleg már írtál egy hozzászólást ehhez a termékhez.</p>
        @endif
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</div>
</body>
</html>
