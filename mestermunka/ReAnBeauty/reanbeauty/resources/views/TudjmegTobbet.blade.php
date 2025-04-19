<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Tudj meg többet</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        .fade-in { opacity: 0; transform: translateY(20px); transition: all 0.6s ease-in-out; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
        .card:hover { transform: scale(1.05); transition: 0.3s ease-in-out; }
    </style>
</head>
<body class="TudjmegTobbet-body">
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.jpg" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNav">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menü</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center fade-in">Tudj meg többet a ReAnBeauty-ról</h2>
        <hr>
        <h2 class="text-center fade-in">A <strong>ReAnBeauty</strong> egy közösségi platform azok számára, akik szeretik az arc- és hajápolást, és szívesen megosztják tapasztalataikat másokkal.</h2>
        <div class="row mt-4">
            <div class="col-md-6 fade-in">
                <h4>Mit kínálunk?</h4>
                <ul>
                    <li><strong>Regisztrációval teljes élmény</strong> – A tartalom megosztásához, kommenteléshez és likeoláshoz regisztráció szükséges.</li>
                    <li><strong>Termékfeltöltés és értékelés</strong> – Oszd meg a kedvenc termékeidet, és segíts másoknak a választásban.</li>
                    <li><strong>Rutinok megosztása</strong> – Mutasd meg, hogyan építetted fel a napi vagy heti arc- és hajápolási rutinodat!</li>
                    <li><strong>Interakció a közösséggel</strong> – Likeold a posztokat, kommentelj, és beszélgess másokkal a kedvenc termékeitekről.</li>
                    <li><strong>Egyszerű és átlátható felület</strong> – Gyors és könnyen kezelhető platform mindenki számára.</li>
                </ul>
                

            </div>
            <div class="col-md-6 text-center fade-in">
                <div class="card shadow-lg p-3 rounded">
                    <img src="/img/ReAnBeauty-tudjtobbetkep.jpg" class="img-fluid rounded" alt="Beauty Community">
                </div>
            </div>
        </div>
        
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let elements = document.querySelectorAll(".fade-in");
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add("visible");
                }, index * 300);
            });
        });
    </script>

<footer id="lablec" class=" lablec text-center py-4 mt-5">
        <p>Kövess minket itt is!</p>
        <p><a href="https://www.facebook.com/profile.php?id=61574567735162" class="text-light">Facebook</a> | <a href="#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>
</body>
</html>