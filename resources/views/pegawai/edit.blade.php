{{-- <html> --}}

    @extends('layout.bahagia')

    @section('title', 'Mengedit Data Pegawai')
    @section('judulhalaman', 'Edit Data Pegawai')
    @section('konten')

{{-- <head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3> --}}

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <table>
            <tr> <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> </tr>
            <tr>
                <td class="isi-tabel"> Nama </td>
                <td class="isi-tabel"> <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jabatan</td>
                <td class="isi-tabel"> <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Umur</td>
                <td class="isi-tabel"> <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Alamat</td>
                <td class="isi-tabel"> <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </td>
            </tr>
            {{-- Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/> --}}
            {{-- Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
            Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        </table>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    <br>
    <a href="/pegawai"> Kembali</a>
    @endsection
{{-- </body>
</html> --}}
