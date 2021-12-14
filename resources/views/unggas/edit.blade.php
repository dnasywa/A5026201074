
    @extends('layout.bahagia')

    @section('title', 'Mengedit Data Unggas')
    @section('judulhalaman', 'Edit Data Unggas')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($unggas as $u)
	<form action="/unggas/update" method="post">
		{{ csrf_field() }}

        <table>
            <tr> <input type="hidden" name="id" value="{{ $u->kodeunggas }}"> </tr>
            <tr>
                <td class="isi-tabel">Nama Unggas</td>
                <td class="isi-tabel"> <input type="text" required="required" name="merk" value="{{ $u->namaunggas }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jumlah Unggas</td>
                <td class="isi-tabel"> <input type="number" required="required" name="jumlah" value="{{ $u->jumlahunggas }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Ketersediaan</td>
                <td class="isi-tabel">
                    <input type="radio" id="html" name="tersedia" value="T" @if ($u->tersedia === "T" ) checked="checked" @endif>
                    <label for="html">Tersedia </label>
                    <input type="radio" id="css" name="tersedia" value="K" @if ($u->tersedia === "K" ) checked="checked" @endif>
                    <label for="css"> Kosong</label>
                </td>
            </tr>
        </table>

		<input type="submit" value="Simpan Perubahan">

	</form>
	@endforeach

    <br>
    <a href="/unggas">Kembali</a>
@endsection
