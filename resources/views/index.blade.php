<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data siswa</title>
	<style type="text/css">
		a, button{
			width: 100px;
			background: blue;
			color: white;
			text-decoration: none;
			display: inline-block;
			padding: 3px;
			border-radius: 10px;
			text-align: center;
		}
		form{
			display: inline-block;
		}
	</style>
</head>
<body>
	@if(session()->has('success'))
	<script>alert('{{session('success')}}')</script>
	@endif
	<h1>Data siswa</h1>
	<a href="/student/create">Tambah siswa</a>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Nis</th>
			<th>Aksi</th>
		</tr>
		@if($students->count())
		@foreach($students as $student)
		<tr>
			<td>{{$student->nama}}</td>
			<td>{{$student->kelas}}</td>
			<td>{{$student->nis}}</td>
			<td>
				<a href="student/{{$student->id}}">Detail</a>
				<a href="student/{{$student->id}}/edit">Edit</a>
				<form action="/student/{{$student->id}}" method="post">
					@method('delete')
					@csrf
					<button>Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		@endif
	</table>	

</body>
</html>