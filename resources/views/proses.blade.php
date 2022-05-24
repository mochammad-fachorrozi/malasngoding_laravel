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
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>www.malasngoding.com</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $data->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $data->usia }}</td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>