<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Regisztráció</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="login-body">

    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light fs-4" href="{{ url('/welcome') }}">
                <img src="/img/ReAnLogoo.png" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
            </a>
           
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card login-kartya" style="width: 400px;">
            <div class="card-body">
                <h4 class="card-title text-center text-dark mb-4">Regisztráció</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            
                                <li>{{ $error }}</li>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('registration') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="telefonszam" class="form-label">Telefonszám</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-phone-fill"></i></span>
                            <input type="text" class="form-control login-input" id="telefonszam" name="phone_number" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="felhasznalonev" class="form-label">Felhasználónév</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control login-input" id="felhasznalonev" name="username" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email cím</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control login-input" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jelszo" class="form-label">Jelszó</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control login-input" id="jelszo" name="password" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jelszo_ismetles" class="form-label">Jelszó ismétlése</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control login-input" id="jelszo_ismetles" name="password_confirmation" required>
                        </div>
                    </div>

                    <button type="submit" class="btn login-gomb">Regisztrálok!</button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ url('/login') }}" class="text-dark">Már van fiókod? Bejelentkezés</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
