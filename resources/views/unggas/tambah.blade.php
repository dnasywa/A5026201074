    @extends('layout.bahagia')

    @section('title', 'Menambah Unggas')
    @section('judulhalaman', 'Menambah Data Unggas')

    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	<form action="/unggas/store" method="post">
		{{ csrf_field() }} {{-- sama kaya @csrf --}}

        <table>
            <tr> <input type="hidden" name="kode" required="required"> </tr>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> <input type="text" name="merk" required="required"> </td> {{-- name sesuai alias --}}
            </tr>
            <tr>
                <td class="isi-tabel">Jumlah</td>
                <td class="isi-tabel">  <input type="number" name="jumlah" required="required"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Ketersediaan</td>
                <td class="isi-tabel">
                    <input type="radio" id="html" name="tersedia" value="T" checked="checked">
                    <label for="html">Tersedia </label>
                    <input type="radio" id="css" name="tersedia" value="K">
                    <label for="css"> Kosong</label>
                </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
	</form>

    <br>
    <a href="/unggas"> Kembali</a>
    @endsection
