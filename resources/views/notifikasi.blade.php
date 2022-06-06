<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>


	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
 
				<center>
					<h2>Tutorial Laravel #33 : Notifikasi Dengan Session Laravel</h2>
					<h4><a href="https://www.malasngoding.com/notifikasi-dengan-session-laravel/">WWW.MALASNGODING.COM</a></h4>
				</center>
 
				@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
				@if ($message = Session::get('gagal'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
				@if ($message = Session::get('peringatan'))
				<div class="alert alert-warning alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
 
 
				<center>
                                <a href="/pesan/sukses" class="btn btn-success">NOTIFIKASI SUKSES</a>
				<a href="/pesan/gagal" class="btn btn-danger">NOTIFIKASI GAGAL</a>
				<a href="/pesan/peringatan" class="btn btn-warning">NOTIFIKASI PERINGATAN</a>
				</center>
			</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>