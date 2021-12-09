{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title> --}}
{{-- </head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3> --}}

    @extends('layout.bahagia')

    @section('title', 'Data Pegawai')
    @section('judulhalaman', 'Daftar Pegawai')

    @section('konten')

        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        <br>

        <style>
            .isi-tabel {
                padding: 10px;
                border: 1px solid black;
            }
        </style>

            <table>
                <tr>
                    <th class="isi-tabel" style="width: 25%">Nama</th>
                    <th class="isi-tabel" style="width: 25%">Jabatan</th>
                    <th class="isi-tabel" style="width: 15%">Umur</th>
                    <th class="isi-tabel" style="width: 20%">Alamat</th>
                    <th class="isi-tabel" style="width: 15%">Opsi</th>
                </tr>

                @foreach($pegawai as $p)
                <tr>
                    <td class="isi-tabel" >{{ $p->pegawai_nama }}</td>
                    <td class="isi-tabel" >{{ $p->pegawai_jabatan }}</td>
                    <td class="isi-tabel" >{{ $p->pegawai_umur }}</td>
                    <td class="isi-tabel" >{{ $p->pegawai_alamat }}</td>
                    <td class="isi-tabel" >
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </table>
    @endsection

{{-- </body>
</html> --}}
