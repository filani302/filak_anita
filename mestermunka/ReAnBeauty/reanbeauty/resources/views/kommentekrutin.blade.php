<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hozzászólás - ReAnBeauty</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Saját CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
</head>
<body class="komment-body">

    <!-- Navbar (nem változott) -->
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
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>

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
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>
            </ul>
        </div>
    </div>
    
    <!-- Kommentek szekció -->
    <div class="container mt-5">
        <div class="comment-section">
            <h1 class="text-center">{{ $rutin->title }}</h1>
            <img src="{{ asset($rutin->p_image) }}" alt="Termék kép" class="img-fluid mb-4">
            <p class="text-center">{{ $rutin->description }}</p>
            <hr>

            <h3 class="text-center">Hozzászólások:</h3>

            <!-- Kommentek -->
            @foreach ($comments as $comment)
                <div class="comment-box">
                    <p class="comment-author">{{ $comment->user->username }}</p>
                    <p class="comment-text">{{ $comment->description }}</p>
                </div>
            @endforeach

            @if ($comments->isEmpty())
                <p class="no-comments">Még nincs egy hozzászólás sem ehhez a rutinhoz.</p>
            @endif

            <!-- Hozzászólás hozzáadása -->
            @if (!$rutin->hasCommentByUser(auth()->id())) <!-- Ha nincs hozzászólás -->
                <form action="{{ route('comments.rutin.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rutin_id" value="{{ $rutin->id }}">
                    <textarea name="comment" class="form-control" placeholder="Írj egy hozzászólást..." required></textarea>
                    <button type="submit" class="btn btn-submit mt-3">Küldés</button>
                </form>
            @else
                <p class="text-center text-muted mt-3">Már írtál hozzászólást ehhez a rutinhoz.</p>
            @endif
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
