<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty üdvözlő oldal</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
 
 
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="btn btn-custom ms-2" href="{{ url('/login') }}">Bejelentkezés</a></li>
                <li class="nav-item"><a class="btn btn-custom ms-2" href="{{ url('/registration') }}">Csatlakozz most</a></li>
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
            <li class="nav-item"><a class="btn btn-dark w-100 mt-2" href="{{ url('/login') }}">Bejelentkezés</a></li>
            <li class="nav-item"><a class="btn btn-dark w-100 mt-2" href="{{ url('/registration') }}">Csatlakozz most</a></li>
            </ul>
        </div>
    </div>
   
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="fw-bold">✨ Fedezd fel a szépség igazi erejét! ✨</h1>
            <p class="lead">Bőrápolás. Hajápolás. Rutinok. Inspiráció.</p>
            <a href="{{ url('/TudjmegTobbet') }}" class="btn btn-custom me-3">Tudj meg többet</a>
        </div>
    </section>
</body>
</html>
</html>