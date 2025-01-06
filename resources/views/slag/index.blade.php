<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Slagok</title>
</head>
<body>
    <h1>Slagok</h1>
    <a href="{{ route('slag.create') }}">Új slag hozzáadása</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
                <th>Hossz</th>
                <th>Anyag</th>
                <th>Nyomásálló</th>
                <th>Csatlakozó Méret</th>
                <th>Ár</th>
                <th>Akciók</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slagok as $slag)
                <tr>
                    <td>{{ $slag->id }}</td>
                    <td>{{ $slag->nev }}</td>
                    <td>{{ $slag->hossz }}</td>
                    <td>{{ $slag->anyaga }}</td>
                    <td>{{ $slag->nyomasallo }}</td>
                    <td>{{ $slag->csatlakozo_meret }}</td>
                    <td>{{ $slag->ar }} Ft</td>
                    <td>
                        <a href="{{ route('slag.edit', $slag->id) }}">Szerkesztés</a>
                        <form action="{{ route('slag.destroy', $slag->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
