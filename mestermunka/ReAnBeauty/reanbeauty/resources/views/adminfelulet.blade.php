<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ReAnBeauty - Adminfelület</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Felhasználó neve</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Termék/rutin neve</td>
                </tr>
                <tr>
                    <td>Termék típusa</td>
                </tr>
                <tr>
                    <td>Termék leírása</td>
                </tr>
            </tbody>
            
        </table>
       
    </div>
    <div class="d-flex justify-content-end mt-2">
        <button class="btn btn-danger btn-sm">Törlés</button>
    </div>
</div>
</body>
</html>