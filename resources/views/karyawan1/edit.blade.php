
    @extends('layout.bahagia')

    @section('title', 'Mengedit Data Karyawan')
    @section('judulhalaman', 'Edit Data Karyawan')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}

        <table>
            <tr>
                <td class="isi-tabel">NIP</td>
                <td class="isi-tabel"> <input type="text" required="required" name="nrp" value="{{ $k->NIP }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> <input type="text" required="required" name="namaKaryawan" value="{{ $k->Nama }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Pangkat</td>
                <td class="isi-tabel"> <input type="text" required="required" name="pangkat" value="{{ $k->Pangkat }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Gaji</td>
                <td class="isi-tabel"> <input type="text" required="required" name="gaji" value="{{ $k->Gaji }}"> </td>
            </tr>
        </table>

		<input type="submit" value="Simpan Perubahan">

	</form>
	@endforeach

    <br>
    <a href="/karyawan1">Kembali</a>
@endsection
