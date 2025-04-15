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
            <a class="navbar-brand text-dark fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.jpg" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/welcome') }}">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/termekek') }}">Termékek</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/rutinok') }}">Rutinok</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('/kedvencek') }}">Kedvencek</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ url('http://127.0.0.1:8000/') }}">Kijelentkezés</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/feltoltott') }}">Posztjaim</a></li>

                </ul>
            </div>
        </div>
    </nav>

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
        <h2 class="text-center text-dark mb-4">Oszd meg jól bevált rutinodat!</h2>

        <form action="{{ route('rutin.store') }}" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="title" class="form-label fw-bold">Rutin neve</label>
            <input type="text"  class="form-control shadow-sm w-100"  id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="rutin_type" class="form-label fw-bold">Típus</label>
                <select class="form-select" id="rutin_type" name="rutin_type" required>
                    <option value="Hajápolás">Hajápolás</option>
                    <option value="Bőrápolás">Bőrápolás</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="allergen" class="form-label fw-bold">Allergén (Tölts fel egy képet a termék hátuljáról, ahol jól látható a térmék összetevői!)</label>
                <br>

                <div class="mb-3">
                <input type="file" class="form-control w-100" id="a_image" name="a_image">
            </div>
            <div class="mb-6">
                <label for="description" class="form-label fw-bold">Leírás</label>
                <textarea class="form-control shadow-sm w-100" id="description" name="description" rows="4" required></textarea>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Termék képek(Töltsd fel termékeidről egy képet!)</label>
                <input type="file" class="form-control w-100" id="p_image" name="p_image">
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