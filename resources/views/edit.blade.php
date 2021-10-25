<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa | Edit Data</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="container mt-5 bg-white text-dark text-center">
        <h3>EDIT DATA MAHASISWA FAKULTAS TEKNIK DAN KEJURUAN UNDIKSHA</h3>
    </nav>

    <div class="container mt-4">
        <a href="/"><button type="button" class="btn btn-warning">Kembali</button></a>
    </div>

    <div class="container">
        @foreach($mahasiswa as $m)
            <form action="/update" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$m->id}}">
                </div>
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan nama mahasiswa " autocomplete="off" autofocus value="{{$m->nama_mahasiswa}}">
                </div>
                <div class="form-group">
                    <label for="nim_mahasiswa">NIM</label>
                    <input type="number" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa" placeholder="Masukkan nim mahasiswa" autocomplete="off" value="{{$m->nim_mahasiswa}}">
                </div>
                <div class="form-group">
                    <label for="kelas_mahasiswa">Kelas</label>
                    <input type="text" class="form-control" id="kelas_mahasiswa" name="kelas_mahasiswa" placeholder="Masukkan kelas mahasiswa" value="{{$m->kelas_mahasiswa}}">
                </div>
                <div class="form-group">
                    <label for="prodi_mahasiswa">Prodi</label>
                    <input type="text" class="form-control" id="prodi_mahasiswa" name="prodi_mahasiswa" placeholder="Masukkan prodi mahasiswa" value="{{$m->prodi_mahasiswa}}">
                </div>
                <div class="form-group">
                    <label for="fakultas_mahasiswa">Fakultas</label>
                    <input type="text" class="form-control" id="fakultas_mahasiswa" name="fakultas_mahasiswa" placeholder="Masukkan fakultas mahasiswa" value="{{$m->fakultas_mahasiswa}}">
                </div>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
        @endforeach
    </div>
</body>
</html>