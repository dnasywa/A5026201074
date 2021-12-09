{{-- <!DOCTYPE html>
<html>
<head>
    <title>Tugas pembuatan CRUD</title>
</head>
<body>

	<h3>Data mutasi</h3> --}}

    @extends('layout.bahagia')

    @section('title', 'Data Mutasi')
    @section('judulhalaman', 'Daftar Mutasi Pegawai')

    @section('konten')

	<a href="/mutasi/tambah"> + Tambah mutasi Baru</a>

    <style>
        .isi-tabel {
            padding: 10px;
            border: 1px solid black;
        }
    </style>

	<table>
		<tr>
			<th class="isi-tabel" style="width: 15%">ID Pegawai</th>
			<th class="isi-tabel" style="width: 25%">Departemen</th>
			<th class="isi-tabel" style="width: 25%">Sub Departemen</th>
			<th class="isi-tabel" style="width: 20%">Mulai Bertugas</th>
			<th class="isi-tabel" style="width: 15%">Opsi</th>
		</tr>

		@foreach($mutasi as $m)
		<tr>
			<td class="isi-tabel">{{ $m->IDPegawai }}</td>
			<td class="isi-tabel">{{ $m->Departemen }}</td>
			<td class="isi-tabel">{{ $m->SubDepartemen }}</td>
			<td class="isi-tabel">{{ $m->MulaiBertugas }}</td>
			<td class="isi-tabel">
				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>
@endsection

{{-- </body>
</html> --}}
