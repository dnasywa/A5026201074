
    @extends('layout.bahagia')

    @section('title', 'Melihat Data Unggas')
    @section('judulhalaman', 'Detail Data Unggas')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($unggas as $u)
        <table>
            <tr>
                <td class="isi-tabel">Nama Unggas</td>
                <td class="isi-tabel"> {{ $u->namaunggas }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jumlah Unggas</td>
                <td class="isi-tabel"> {{ $u->jumlahunggas }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Tersedia</td>
                <td class="isi-tabel"> {{ $u->tersedia }} </td>
            </tr>
        </table>
	@endforeach

    <br>
    <a href="/unggas"> Kembali</a>
    @endsection
