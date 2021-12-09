{{-- <!DOCTYPE html>
<html>
<head>
	<title>CRUD Tabel Absen</title>
</head>
<body> --}}

    @extends('layout.bahagia')

    @section('title', 'Data Absensi')
    @section('judulhalaman', 'Daftar Absensi Pegawai')

    @section('konten')

	{{-- <h2>Daftar Absensi Pegawai</h2> --}}


	<a href="/absen/add"> + Tambah Absensi Baru</a>
    <br>

    <style>
        .isi-tabel {
            padding: 10px;
            border: 1px solid black;
        }
    </style>

    <table>
        <tr>
            <th class="isi-tabel" style="width: 15%">ID Pegawai</th>
            <th class="isi-tabel" style="width: 25%">Tanggal</th>
            <th class="isi-tabel" style="width: 15%">Status</th>
            <th class="isi-tabel" style="width: 15%">Opsi</th>
        </tr>

        @foreach($absen as $a)
        <tr>
            <td class="isi-tabel">{{ $a->IDPegawai }}</td>
            <td class="isi-tabel">{{ $a->Tanggal }}</td>
            <td class="isi-tabel">{{ $a->Status }}</td>
            <td class="isi-tabel">
                <a href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

	{{-- <table border="1">
		<tr>

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>


		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>


	</table> --}}
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>
@endsection
{{-- </body>
</html> --}}
