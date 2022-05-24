<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>Document</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    
    <a href="/mahasiswa/tambah">(+) Tambah Mahasiswa</a>

    <br><br>

    <form action="/mahasiswa/cari" method="GET">
    
    <div class="input-group mb-3">
        <input type="text" name="cari" class="form-control" placeholder="Cari Mahasiswa . . " value="{{ old('cari') }}">
        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
    </div>

    </form>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $key=>$mhs)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->umur }}</td>
            <td>{{ $mhs->alamat }}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
            </td>

        </tr>
            
        @endforeach

    </table>

    <br>

    <p>Halaman : {{ $mahasiswa->currentPage() }}</p> 
    <p>Jumlah Data : {{ $mahasiswa->total() }}</p>
    <p>Data Per Halaman : {{ $mahasiswa->perPage() }}</p>

    {{-- penomoran paginate --}}
    {!! $mahasiswa->links() !!}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>