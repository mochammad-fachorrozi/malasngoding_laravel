<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Edit Data Mahasiswa</h3>
    <a href="/mahasiswa"> <- Kembali </a>

    <br><br>

    @foreach ($mahasiswa as $mhs)

        <form action="/mahasiswa/update" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $mhs->id }}">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" value="{{ $mhs->nama }}"> <br>
            <label for="umur">Umur : </label>
            <input type="text" name="umur" value="{{ $mhs->umur }}"> <br>
            <label for="alamat">Alamat : </label>
            <textarea name="alamat">{{ $mhs->alamat }}</textarea> <br>
            <input type="submit" value="Simpan Data">
        </form>
        
    @endforeach
</body>
</html>