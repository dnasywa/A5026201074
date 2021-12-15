
    @extends('layout.bahagia')

    @section('title', 'Melihat Data Karyawan')
    @section('judulhalaman', 'Detail Data Karyawan')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($karyawan1 as $k)
        <table>
            <tr>
                <td class="isi-tabel">NIP</td>
                <td class="isi-tabel"> {{ $k->NIP }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> {{ $k->Nama }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Pangkat</td>
                <td class="isi-tabel"> {{ $k->Pangkat }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Gaji</td>
                <td class="isi-tabel"> {{ number_format($k->Gaji, 0, ',', '.') }} </td>
            </tr>
        </table>
	@endforeach

    <br>
    <a href="/karyawan1"> Kembali</a>
@endsection
