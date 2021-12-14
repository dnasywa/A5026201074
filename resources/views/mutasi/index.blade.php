
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

    <form action="/mutasi/cari" method="GET">
        <br>
            <table>
                <tr>
                    <td style="width: 100%">  <input type="text" class="form-control" name="cari" placeholder="Telusuri data mutasi Pegawai berdasarkan nama atau departemennya" value="{{ old('cari') }}"> </td>
                    <td style="padding: 10px"> <input type="submit" class="btn btn-default" value="CARI"> </td>
                </tr>
            </table>
        <br>
    </form>

	<table>
		<tr>
			<th class="isi-tabel" style="width: 15%">Nama Pegawai</th> {{-- udah pake join, bukan ID lagi--}}
			<th class="isi-tabel" style="width: 25%">Departemen</th>
			<th class="isi-tabel" style="width: 25%">Sub Departemen</th>
			<th class="isi-tabel" style="width: 20%">Mulai Bertugas</th>
			<th class="isi-tabel" style="width: 15%">Opsi</th>
		</tr>

		@foreach($mutasi as $m)
		<tr>
			<td class="isi-tabel">{{ $m->pegawai_nama }}</td>
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

