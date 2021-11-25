<!DOCTYPE html>
<html>
<head>
    <title>Tugas pembuatan CRUD</title>
</head>
<body>
	<h3>Tambah data mutasi</h3>

	<a href="/mutasi"> ⇚ Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai"> <br/>
		Departemen <input type="text" required="required" name="dept"> <br/>
		Sub Departemen <input type="text" required="required" name="subDept"> <br/>
		Mulai Bertugas <input type="datetime-local" required="required" name="bertugas"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
