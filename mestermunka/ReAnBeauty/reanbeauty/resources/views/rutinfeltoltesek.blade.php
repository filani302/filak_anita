<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Rutin feltöltések</title>
    
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

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="form-container">
        <h2 class="text-center text-dark mb-4">Oszd meg jól bevált rutinodat!</h2>

        <form action="{{ url('rutinfeltoltesek') }}" method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Termékek neve <i class="fas fa-tag"></i></label>
                <input type="text" class="form-control shadow-sm" placeholder="Adja meg a termék nevét">
            </div>
            <div class="mb-3">
                <label for="allergen" class="form-label">Allergen</label>
                <br>
                <input type="checkbox" name="allergens[]" value="0"> Illatanyagok<br>
                <input type="checkbox" name="allergens[]" value="1"> Tartósítószerek<br>
                <input type="checkbox" name="allergens[]" value="2"> Emulgeálószerek<br>
                <input type="checkbox" name="allergens[]" value="3"> Növényi kivonatok és illóolajok<br>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Leírás <i class="fas fa-pencil-alt"></i></label>
                <textarea class="form-control shadow-sm" rows="4" placeholder="Adj leírást, hogyan használod termékedet."></textarea>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Termékkép</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-custom bg-dark w-100 fw-bold">Beküldés <i class="fas fa-paper-plane"></i></button>
        </form>
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