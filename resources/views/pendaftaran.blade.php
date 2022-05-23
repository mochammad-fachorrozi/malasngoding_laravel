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

    <form action="/mahasiswa/pendaftaran/proses" method="POST">
        @csrf
        
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>