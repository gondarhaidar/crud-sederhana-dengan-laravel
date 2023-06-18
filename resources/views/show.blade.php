<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail siswa</title>
</head>
<body>
	<h1>Detail siswa</h1>
	<ul>
		<li>nama : {{$student->nama}}</li>
		<li>kelas : {{$student->kelas}}</li>
		<li>nis : {{$student->nis}}</li>
		<li>jenis kelamin : {{$student->kelamin}}</li>
		<li>alamat : {{$student->alamat}}</li>
	</ul>
	<a href="/student">Kembali</a>

</body>
</html>