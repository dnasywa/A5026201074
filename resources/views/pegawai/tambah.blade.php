{{-- <!DOCTYPE html>
<html> --}}

    @extends('layout.bahagia')

    @section('title', 'Menambah Pegawai')
    @section('judulhalaman', 'Menambah Data Pegawai')

    @section('konten')

{{-- <head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3> --}}

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }} {{-- sama kaya @csrf --}}
        <table>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> <input type="text" name="nama" required="required"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jabatan</td>
                <td class="isi-tabel">  <input type="text" name="jabatan" required="required"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Umur</td>
                <td class="isi-tabel"> <input type="number" name="umur" required="required"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Alamat</td>
                <td class="isi-tabel"> <textarea name="alamat" required="required"></textarea> </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
	</form>
    <br>
    <a href="/pegawai"> Kembali</a>
    @endsection

{{-- </body>
</html> --}}
