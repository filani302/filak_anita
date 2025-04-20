<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Adminfelulet Bejelentkezés</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
</head>
<body class="login-body">

    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <p class="navbar-brand text-light fs-4">
                <img src="/img/ReAnLogoo.jpg" class="ReAnLogoo" alt="Logo" width="50"> ReAnBeauty
</p>
            
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card login-kartya" style="width: 400px;">
            <div class="card-body">
                <h4 class="card-title text-center text-dark mb-4">Bejelentkezés</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{  route('admin.login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control login-input" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Jelszó</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control login-input" id="password" name="password" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="kod" class="form-label">Kód</label>
                        <div class="input-group">
                            <span class="input-group-text login-icon"><i class="bi bi-envelope-fill"></i></span>
                            <input type="kod" class="form-control login-input" id="kod" name="kod" required>
                        </div>
                    </div>

                    <button type="submit" class="btn login-gomb">Bejelentkezés</button>
                </form>
                
            </div>
        </div>
    </div>

</body>
</html>