    @extends('layout.bahagia')

    @section('title', 'Data Unggas')
    @section('judulhalaman', 'Daftar Unggas')

    @section('konten')

        <a href="/unggas/tambah"> + Tambah Unggas Baru</a>
        <br>

        <style>
            .isi-tabel {
                padding: 10px;
                border: 1px solid black;
            }
        </style>

    {{-- <div class="container" align="center"> --}}
        <form action="/unggas/cari" method="GET">
            <br>
            <table>
                <tr>
                    <td style="width: 93%"> <input type="text" class="form-control" name="cari" placeholder="Telusuri data Unggas berdasarkan tipenya" value="{{ old('cari') }}"> </td>
                    <td style="padding: 10px"> <input type="submit" class="btn btn-default" value="CARI"> </td>
                </tr>
            </table>
            <br>
        </form>

            <table>
                <tr>
                    <th class="isi-tabel" style="width: 10%">Nama</th>
                    {{-- <th class="isi-tabel" style="width: 10%">Jumlah</th> --}}
                    <th class="isi-tabel" style="width: 10%">Tersedia</th>
                    <th class="isi-tabel" style="width: 10%">Opsi</th>
                </tr>

                @foreach($unggas as $u)
                <tr>
                    <td class="isi-tabel" >{{ $u->namaunggas }}</td>
                    {{-- <td class="isi-tabel" >{{ $u->jumlahunggas }}</td> --}}
                    <td class="isi-tabel" >{{ $u->tersedia }}</td>
                    <td class="isi-tabel" >
                        <a href="/unggas/view/{{ $u->kodeunggas }}">View Detail</a>
                        |
                        <a href="/unggas/edit/{{ $u->kodeunggas }}">Edit</a>
                        |
                        <a href="/unggas/hapus/{{ $u->kodeunggas }}">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </table>
            {{ $unggas->links() }}
            <br>

        <p>
            Keterangan status ketersediaan: <br>
            T : Tersedia | K : Kosong
        </p>

    @endsection
