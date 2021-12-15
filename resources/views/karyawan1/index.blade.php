@extends('layout.bahagia')

@section('title', 'Data Karyawan')
@section('judulhalaman', 'Daftar Karyawan')

@section('konten')


    <style>
        .isi-tabel {
            padding: 10px;
            border: 1px solid black;
        }
    </style>

    <table>
        <tr>
            <th class="isi-tabel" style="width: 10%">NIP</th>
            <th class="isi-tabel" style="width: 15%">Nama</th>
            <th class="isi-tabel" style="width: 10%">Pangkat</th>
            <th class="isi-tabel" style="width: 10%">Gaji</th>
            <th class="isi-tabel" style="width: 10%">Opsi</th>
        </tr>

        @foreach($karyawan1 as $k)
        <tr>
            <td class="isi-tabel" >{{ $k->NIP }}</td>
            <td class="isi-tabel" >{{ $k->Nama }}</td>
            <td class="isi-tabel" >{{ $k->Pangkat }}</td>
            <td class="isi-tabel" >{{ number_format($k->Gaji, 0, ',', '.') }}</td>
            <td class="isi-tabel" >

                <a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
                |
                <a href="/karyawan1/view/{{ $k->NIP }}">View</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{ $karyawan1->links() }}

@endsection
