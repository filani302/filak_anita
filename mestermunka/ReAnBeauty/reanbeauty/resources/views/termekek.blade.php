<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Termékek</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="termekek-body">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
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
                <li class="nav-item"><a class="nav-link text-light" href="{{ url('/kedvencek') }}">Kedvencek</a></li>

            </ul>
        </div>
    </div>

    





    <!-- Hero szekció -->
    <section class="hero-section2 text-center py-5">
        <div class="container">
            <h1 class="fw-bold">✨ Oszd meg a véleményed a termékekről ✨</h1>
            <p class="lead">Bőrápolás. Hajápolás. Rutinok. Inspiráció.</p>
            <a href="{{ url('/termekfeltoltesek') }}" class="btn btn-custom me-3">Megosztom a termékem</a>
        </div>
    </section>

    <!-- Termékek listája -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Termékek</h1>
        <hr>


        <form class="mb-4">
    <div class="accordion" id="filterAccordion">

        <!-- Rutin Típus -->
        <div class="accordion-item border border-pink">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button text-white " style="background-color: #ff85a2;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    Termék Típus
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body bg-light">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="hajapolas">
                        <label class="form-check-label text-pink">Hajápolási termék</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="type[]" value="arcapolas">
                        <label class="form-check-label text-pink">Arcápolási termék</label>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</form>



        <!-- Termék  -->
       


        <div class="container my-5">
    <hr>
    @if($products->isEmpty())
        <p class="text-center text-muted">Jelenleg még nem töltöttek fel terméket.</p>
    @else
        @foreach($products as $product)
            <div class="content-box p-4 shadow-sm rounded bg-light mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 text-center">
                        <div class="image-slider" data-product-id="{{ $product->id }}">
                            <img src="{{ asset($product->p_image) }}" alt="Termék kép" class="img-fluid rounded product-image active">
                            @if($product->a_image)
                                <img src="{{ asset($product->a_image) }}" alt="Alternatív kép" class="img-fluid rounded product-image hidden">
                                <button class="prev-btn">❮</button>
                                <button class="next-btn">❯</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <h5><strong>{{ $product->title }}</strong></h5>
                        <p class="mb-2">{{ $product->description }}</p>
                        <p class="text-muted">Feltöltötte: <strong>{{ $product->user->username ?? 'Ismeretlen' }}</strong></p>
                    </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-start gap-3">

                    <form action="{{ route('product.like') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-light">
                    @if($product->isLikedByUser(Auth::id())) 
                    ❤️ Like
                    @else 
                    🤍 Like
                    @endif
                    </button>
                    </form>
                    
                <a href="{{ url('/kedvencek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;"> <i class="fas fa-star"> ⭐ Kedvencek</i></a>
                <a href="{{ url('/Kommentek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;">
    <i class="fas fa-comment"></i> 💬 Komment
</a>
               
            </div>
                </div>
                
            </div>
        @endforeach
    @endif
</div>

        
            
    </div>
        
            

    <!-- FontAwesome ikonokhoz -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<!-- JavaScript a képváltáshoz -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".image-slider").forEach(function (slider) {
            let images = slider.querySelectorAll(".product-image");
            let prevBtn = slider.querySelector(".prev-btn");
            let nextBtn = slider.querySelector(".next-btn");
            let currentIndex = 0;

            if (!images.length > 1) return; // Ha csak egy kép van, nem kell váltás

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

            updateImages(); // Alapértelmezett állapot
        });
    });
</script>




 <!-- 

 <!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hozzászólás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="komment-body">


 
  <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
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


            </ul>
        </div>
    </div>
   
<br>
<br>


<div class="content-box p-4 shadow-sm rounded bg-light mb-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/ReAnLogoo.png" alt="Termék kép" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <h5><strong>Termék neve</strong></h5>
                    <p class="mb-2">Termékleírás</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores placeat quam neque hic impedit distinctio beatae.</p>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-start gap-3">
                <i class="fas fa-heart"> ❤️ Like</i>
                <a href="{{ url('/kedvencek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;"> <i class="fas fa-star"> ⭐ Kedvencek</i></a>
                <a href="{{ url('/Kommentek') }}" class="text-primary fw-bold text-dark" style="cursor: pointer; text-decoration: none;">
    <i class="fas fa-comment"></i> 💬 Komment
</a>
               
            </div>
        </div>


               


               
                <div class="container mt-5" x-data="{ hozzaszolasLathato: false }">
    
    <button class="btn btn-primary bg-dark" @click="hozzaszolasLathato = !hozzaszolasLathato">
        Hozzászólás írása
    </button>


    
    <div x-show="hozzaszolasLathato" class="mt-3 hozzaszolas-doboz p-4 border rounded shadow">
        <h3>Hozzászólás</h3>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Felhasználó neve" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Megjegyzést teszek" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100">Küldés</button>
        </form>
    </div>
</div>


                <div class="hozzaszolasok-div">
                    <h1>Hozzászólások</h1>
                    <p>Itt jelennek meg a tartalomhoz kapcsolodó hozzászólások amit a felhasznalók adnak</p>
               
                    <div class="marMeglevoKomment">
                    <h3>Felhasználó neve</h3>
                    <p>Felhasználó hozzászólása</p>
                    </div>
                </div>



</body>
</html>

 -->
   



    <footer class="bg-dark text-light text-center py-4 mt-5">
        <p>Csatlakozz hozzánk és adj tippet másoknak!</p>
        <p><a href="{{ url('/login') }}" class="text-light">Bejelentkezés</a> | <a href="{{ url('/registration') }}" class="text-light">Regisztráció</a></p>
        <p>Kövess minket itt is!</p>
        <p><a href="#" class="text-light">Facebook</a> | <a href="#" class="text-light">Instagram</a> | <a href="#" class="text-light">TikTok</a></p>
    </footer>

</body>
</html>
