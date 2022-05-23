<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    
    <a href="/mahasiswa/tambah">(+) Tambah Mahasiswa</a>

    <br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->umur }}</td>
            <td>{{ $mhs->alamat }}</td>
            <td>
                <a href="/mahasiswa/edit{{ $mhs->id }}">Edit</a>
                <a href="/mahasiswa/hapus{{ $mhs->id }}">Hapus</a>
            </td>
        </tr>
            
        @endforeach

    </table>
</body>
</html>