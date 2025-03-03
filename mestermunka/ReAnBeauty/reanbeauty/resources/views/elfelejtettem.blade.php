<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Elfelejtettem a jelszavam</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 
</head>
<body class="elfelejtettem-body">

    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="#">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
            
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card elfelejtettem-kartya" style="width: 400px;">
            <div class="card-body">
                <h4 class="card-title text-center text-dark mb-4">Elfelejtett jelszó</h4>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <p class="text-center">Add meg az e-mail címed, és elküldünk egy jelszó-visszaállítási linket.</p>

                <form action="{{ url('forgot-password') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail cím</label>
                        <div class="input-group">
                            <span class="input-group-text elfelejtettem-icon"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control elfelejtettem-input" id="email" name="email" required>
                        </div>
                    </div>

                    <button type="submit" class="btn elfelejtettem-gomb">Jelszó visszaállítása</button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ url('/login') }}" class="text-dark">Vissza a bejelentkezéshez</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
