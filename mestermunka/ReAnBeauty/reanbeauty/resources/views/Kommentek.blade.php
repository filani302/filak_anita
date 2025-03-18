<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hozzászólás</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="komment-body">

    <div class="comment-box">
        <h3>Hozzászólás</h3>
        <form>
            <div class="mb-3">
                <input type="text" class="comment-form-control" placeholder="Felhasználó neve">
            </div>
            <div class="mb-3">
                <textarea class="comment-form-control" rows="5" placeholder="Megjegyzést teszek"></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100">Küldés</button>
        </form>
    </div>

</body>
</html>
