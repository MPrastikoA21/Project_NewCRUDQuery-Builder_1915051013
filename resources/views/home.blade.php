<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa | Home</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="container mt-5 bg-whtie text-dark text-center">
        <h3>DATA MAHASISWA FTK UNDIKSHA</h3>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a href="/tambah"><button type="button" class="btn btn-primary float-right">+ Tambah Data</button></a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->nama_mahasiswa}}</td>
                    <td>{{$m->nim_mahasiswa}}</td>
                    <td>{{$m->kelas_mahasiswa}}</td>
                    <td>{{$m->prodi_mahasiswa}}</td>
                    <td>{{$m->fakultas_mahasiswa}}</td>
                    <td width="200px">
                        <a href="/edit/{{$m->id}}"><button type="button" class="btn btn-success">Ubah</button></a>
                        <a href="/hapus/{{$m->id}}"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            

</body>
</html>