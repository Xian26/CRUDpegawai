<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <h1 class="text-center m-3">Selamat Datang di Kelola Pegawai</h1>

    <div class="text-center">
        <a href="{{ route('pegawai.tampil')}}" class="btn btn-primary">Klik Disini</a>
    </div>
</body>
</html>