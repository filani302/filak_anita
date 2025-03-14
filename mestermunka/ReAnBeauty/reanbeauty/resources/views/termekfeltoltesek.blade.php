<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Termek feltöltések</title>
    
</head>
<body class="feltoltesek-body">
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

    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNav">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menü</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Termékek</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rutinok</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                <li class="nav-item"><a class="btn btn-dark w-100 mt-2" href="{{ url('/registration') }}">Csatlakozz most</a></li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            @csrf

        <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-container">
        <h2 class="text-center text-dark mb-4">Oszd meg jól bevált termékeidet!</h2>
        <form action="{{ url('termekfeltoltesek') }}" method="POST">  
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Termék neve</label>
                <input type="text"  class="form-control shadow-sm"  id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="product_type" class="form-label fw-bold">Típus</label>
                <select class="form-select" id="product_type" name="product_type" required>
                    <option value=0>Kozmetikum</option>
                    <option value=1>Bőrápolás</option>
                    <option value=2>Egyéb</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="allergen" class="form-label fw-bold">Allergen</label>
                <br>
                <input type="checkbox" name="allergens[]" value=0> Illatanyagok<br>
                <input type="checkbox" name="allergens[]" value=1> Tartósítószerek<br>
                <input type="checkbox" name="allergens[]" value=2> Emulgeálószerek<br>
                <input type="checkbox" name="allergens[]" value=3> Növényi kivonatok és illóolajok<br>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Leírás</label>
                <textarea class="form-control shadow-sm" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Termékkép</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-custom bg-dark w-100 fw-bold">Beküldés <i class="fas fa-paper-plane"></i></button>
        </form>
        </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("image-url").addEventListener("input", function() {
        const url = this.value;
        const imgPreview = document.getElementById("image-preview");

        if (url) {
            imgPreview.src = url;
            imgPreview.style.display = "block";
        } else {
            imgPreview.style.display = "none";
        }
    });
</script>

</body>
</html>