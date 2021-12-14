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

        <form action="/pegawai/cari" method="GET">
            <br>
                <table>
                    <tr>
                        <td style="width: 100%">  <input type="text" class="form-control" name="cari" placeholder="Telusuri data Pegawai berdasarkan nama atau alamatnya" value="{{ old('cari') }}"> </td>
                        <td style="padding: 10px"> <input type="submit" class="btn btn-default" value="CARI"> </td>
                    </tr>
                </table>
            <br>
        </form>

            <table>
                <tr>
                    <th class="isi-tabel" style="width: 15%">Nama</th>
                    {{-- <th class="isi-tabel" style="width: 25%">Jabatan</th>
                    <th class="isi-tabel" style="width: 15%">Umur</th> --}}
                    <th class="isi-tabel" style="width: 15%">Alamat</th>
                    <th class="isi-tabel" style="width: 10%">Opsi</th>
                </tr>

                @foreach($pegawai as $p)
                <tr>
                    <td class="isi-tabel" >{{ $p->pegawai_nama }}</td>
                    {{-- <td class="isi-tabel" >{{ $p->pegawai_jabatan }}</td>
                    <td class="isi-tabel" >{{ $p->pegawai_umur }}</td> --}}
                    <td class="isi-tabel" >{{ $p->pegawai_alamat }}</td>
                    <td class="isi-tabel" >
                        <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                        |
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </table>
            {{ $pegawai->links() }}

    @endsection

{{-- </body>
</html> --}}
