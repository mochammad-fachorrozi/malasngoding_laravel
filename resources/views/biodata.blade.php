<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tutorial Laravel di Malas Ngoding</h1>
    <p>ini adalah view biodata diakses menggunakan DosenController</p>

    <p>Nama : {{ $nama }}</p>
    <p>Mata Kuliah : </p>
    <ul>
    @foreach ($matkul as $row)
        <li>{{ $row }}</li>
    @endforeach
    </ul>
</body>
</html>