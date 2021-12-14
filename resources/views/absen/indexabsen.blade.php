
    @extends('layout.bahagia')

    @section('title', 'Data Absensi')
    @section('judulhalaman', 'Daftar Absensi Pegawai')

    @section('konten')

	<a href="/absen/add"> + Tambah Absensi Baru</a>
    <br>

    <style>
        .isi-tabel {
            padding: 10px;
            border: 1px solid black;
        }
    </style>

    <form action="/absen/cari" method="GET">
        <br>
        <table>
            <tr>
                <td style="width: 100%"> <input type="text" class="form-control" name="cari" placeholder="Telusuri data absensi Pegawai berdasarkan status ketidakhadirannya" value="{{ old('cari') }}"> </td>
                <td style="padding: 10px"> <input type="submit" class="btn btn-default" value="CARI"> </td>
            </tr>
        </table>
        <br>
    </form>

    <table>
        <tr>
            <th class="isi-tabel" style="width: 15%">Nama Pegawai</th> {{-- udah pake join, bukan ID lagi--}}
            <th class="isi-tabel" style="width: 20%">Tanggal</th>
            <th class="isi-tabel" style="width: 15%">Status</th>
            <th class="isi-tabel" style="width: 15%">Opsi</th>
        </tr>

        @foreach($absen as $a)
        <tr>
            <td class="isi-tabel">{{ $a->pegawai_nama }}</td>
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
    {{ $absen->links() }}

    <br>
    <p>
        Keterangan Status: <br>
        I : Izin | S : Sakit | A : Alpha
    </p>
@endsection
