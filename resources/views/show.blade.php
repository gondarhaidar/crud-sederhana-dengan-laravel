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
		<li>nama : {{$student->kelas}}</li>
		<li>nama : {{$student->nis}}</li>
		<li>nama : {{$student->kelamin}}</li>
		<li>nama : {{$student->alamat}}</li>
	</ul>
	<a href="/student">Kembali</a>

</body>
</html>