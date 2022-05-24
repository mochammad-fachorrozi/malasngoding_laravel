<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>FORM PENDAFTARAN MAHASISWA</h3>

    <a href="/mahasiswa"> <- Kembali</a>
    <br><br>

    <form action="/mahasiswa/tambah/proses" method="POST">
        @csrf
        
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="umur">Umur</label>
        <input type="text" name="umur" id="umur">
        <br>
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat"></textarea>
        <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>