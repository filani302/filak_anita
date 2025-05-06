<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Admin Felület</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Termékek</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Név</th>
                <th>Típus</th>
                <th>Leírás</th>
                <th>Művelet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->product_type }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="{{ route('admin.delete.product', $product->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretnéd?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mt-5">Rutinok</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Név</th>
                <th>Típus</th>
                <th>Leírás</th>
                <th>Művelet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rutins as $rutin)
            <tr>
                <td>{{ $rutin->title }}</td>
                <td>{{ $rutin->rutin_type }}</td>
                <td>{{ $rutin->description }}</td>
                <td>
                    <form action="{{ route('admin.delete.rutin', $rutin->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretnéd?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
