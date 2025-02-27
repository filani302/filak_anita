<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="#">
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
            </ul>
        </div>
    </div>
    <div class="container mt-4">
            <h2>Yay, we love dogs! Give us the basics about your pup.</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Pet’s name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Breed</label>
                    <input type="text" class="form-control" placeholder="Pet’s breed">
                </div>
                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div class="d-flex gap-2">
                        <input type="radio" class="btn-check" name="gender" id="female" checked>
                        <label class="form-check-label" for="female">Female</label>
                        <input type="radio" class="btn-check" name="gender" id="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Spayed or Neutered</label>
                    <div class="d-flex gap-2">
                        <input type="radio" class="btn-check" name="spayed" id="yes">
                        <label class="form-check-label" for="yes">Yes</label>
                        <input type="radio" class="btn-check" name="spayed" id="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Weight</label>
                    <div class="d-flex gap-2">
                        <input type="radio" class="btn-check" name="weight" id="w1">
                        <label class="form-check-label" for="w1">0-25 lbs</label>
                        <input type="radio" class="btn-check" name="weight" id="w2">
                        <label class="form-check-label" for="w2">25-50 lbs</label>
                        <input type="radio" class="btn-check" name="weight" id="w3">
                        <label class="form-check-label" for="w3">50-100 lbs</label>
                        <input type="radio" class="btn-check" name="weight" id="w4">
                        <label class="form-check-label" for="w4">100+ lbs</label>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-light">Back</button>
                    <button type="submit" class="btn btn-custom">Next</button>
                </div>
            </form>
        </div>
   
    

</body>
</html>