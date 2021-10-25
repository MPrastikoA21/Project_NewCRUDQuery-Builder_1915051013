<!DOCTYPE html>
<html>
<head>
	<title>Data Mhs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</header>
</head>
<body>
	<nav class="navi">
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Data Mahasiswa</a></li>
		<li><a href="#">Akademik</a></li>
		<li><a href="#">Berita</a></li>
		<li><a href="#">About</a></li>
		</ul>
	</nav>

	<div class="container ">
	<h3>Data mahasiswa</h3>
	<a href="/tambah"> + Tambah mahasiswa Baru</a>
	
	<br/>
	<br/>
 
	<table class="table1" border="1">
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Kelas</th>
			<th>Prodi</th>
            <th>Fakultas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->nama_mahasiswa }}</td>
			<td>{{ $p->nim_mahasiswa }}</td>
			<td>{{ $p->kelas_mahasiswa }}</td>
			<td>{{ $p->prodi_mahasiswa }}</td>
            <td>{{ $p->fakultas_mahasiswa }}</td>
			<td>
				<a href="/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>