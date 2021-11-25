<html>
<head>
	<title>Tugas pembuatan CRUD</title>
</head>
<body>
	<h3>Edit data mutasi</h3>

	<a href="/mutasi"> ⇚ Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="dept" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="subDept" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" required="required" name="bertugas">{{ $m->MulaiBertugas }}> <br/><br>
		<input type="submit" value="Simpan Perubahan">
	</form>
	@endforeach


</body>
</html>
