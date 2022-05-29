<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
 
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Guru | <a href="https://www.malasngoding.com/laravel">www.malasngoding.com</a>
			</div>
			<div class="card-body">
 
				<a href="/guru">Data Guru</a>
				|
				<a href="/guru/trash" class="btn btn-sm btn-primary">Tong Sampah</a>
 
				<br/>
				<br/>
 
				<a href="/guru/kembalikan_semua">Kembalikan Semua</a>
				|
				<a href="/guru/hapus_permanen_semua">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Umur</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($guru as $g)
						<tr>
							<td>{{ $g->nama }}</td>
							<td>{{ $g->umur }}</td>
							<td>
								<a href="/guru/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
								<a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>