<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Új Slag hozzáadása</title>
</head>

<body>
    <h1>Új Slag hozzáadása</h1>
    <form action="{{ route('slag.store') }}" method="POST" class="m-3">
        @csrf
        <label for="nev">Név:</label><br>
        <input type="text" id="nev" name="nev"><br>
        <label for="hossz">Hossz:</label><br>
        <input type="text" id="hossz" name="hossz"><br>
        <label for="anyaga">Anyag:</label><br>
        <input type="text" id="anyaga" name="anyaga"><br>
        <label for="nyomasallo">Nyomásálló:</label><br>
        <input type="text" id="nyomasallo" name="nyomasallo"><br>
        <label for="csatlakozo_meret">Csatlakozó Méret:</label><br>
        <input type="text" id="csatlakozo_meret" name="csatlakozo_meret"><br>
        <label for="ar">Ár:</label><br>
        <input type="text" id="ar" name="ar"><br>
        <label for="kep">Kép URL:</label><br>
        <input type="text" id="kep" name="kep"><br>
        <button type="submit" class="mt-2">Mentés</button>
    </form>
</body>

</html>
