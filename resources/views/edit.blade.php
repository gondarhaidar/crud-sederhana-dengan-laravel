<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit siswa</title>
	<style type="text/css">
		input{
			width: 200px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Tambah siswa</h1>
	<form action="/student/{{$student->id}}" method="post">
		@method('put')
		@csrf
		<label>Nama :</label><br>
		<input type="text" name="nama" value="{{$student->nama}}"><br>
		<label>kelas :</label><br>
		<input type="text" name="kelas" value="{{$student->kelas}}"><br>
		<label>Nis :</label><br>
		<input type="number" name="nis" value="{{$student->nis}}"><br>
		<label>Jenis kelamin :</label><br>
		<select name="kelamin">
			<option value="laki-laki">laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select><br>
		<label>Alamat :</label><br>
		<input value="{{$student->alamat}}" type="text" name="alamat"><br>
		<button>Update siswa</button>
	</form>

</body>
</html>
