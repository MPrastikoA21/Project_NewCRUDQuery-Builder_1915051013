<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa | Tambah Data</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="container mt-4 bg-priamry text-center">
        <h3>TAMBAH DATA MAHASISWA FAKULTAS TEKNIK DAN KEJURUAN UNDIKSHA</h3>
    </nav>
    <div class="container mt-4">
        <a href="/"><button type="button" class="btn btn-warning">Kembali</button></a>
    </div>
    <div class="container">
        <form action="/insert" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama_mahasiswa">Nama</label>
                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan nama mahasiswa" autocomplete="off" autofocus>
            </div>
            <div class="form-group">
                <label for="nim_mahasiswa">NIM</label>
                <input type="number" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa" placeholder="Masukkan nim mahasiswa" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="kelas_mahasiswa">kelas</label>
                <input type="text" class="form-control" id="kelas_mahasiswa" name="kelas_mahasiswa" placeholder="Masukkan kelas mahasiswa">
            </div>
            <div class="form-group">
                <label for="prodi_mahasiswa">Prodi</label>
                <input type="text" class="form-control" id="prodi_mahasiswa" name="prodi_mahasiswa" placeholder="Masukkan prodi mahasiswa">
            </div>
            <div class="form-group">
                <label for="fakultas_mahasiswa">Fakultas</label>
                <input type="text" class="form-control" id="fakulta_mahasiswa" name="fakultas_mahasiswa" placeholder="Masukkan fakultas mahasiswa">
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>
</body>
</html>