
    @extends('layout.bahagia')

    @section('title', 'Menambah Mutasi')
    @section('judulhalaman', 'Menambah Data Mutasi')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}

        <table>
            {{-- <tr> <input type="hidden" name="id"> </tr> --}}
            <tr>
                <td class="isi-tabel">ID Pegawai</td>
                {{-- <td class="isi-tabel">
                    <input type="number" required="required" name="IDPegawai">
                </td> --}}
                <td class="isi-tabel">
                    <select name="IDPegawai"  style="width: 24%">
                        @foreach($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }} </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="isi-tabel">Departemen</td>
                <td class="isi-tabel">
                    <input type="text" required="required" name="dept">
                </td>
            </tr>
            <tr>
                <td class="isi-tabel">Sub Departemen</td>
                <td class="isi-tabel">
                    <input type="text" required="required" name="subDept">
                </td>
            </tr>
            <tr>
                <td class="isi-tabel">Mulai Bertugas</td>
                <td class="isi-tabel" style="width: 100%">
                    <input type="datetime-local" required="required" name="bertugas">
                    {{-- <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $m->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div> --}}
                </td>
            </tr>
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: 'YYYY-MM-DD hh:mm:ss',
                        showTodayButton: false,
                        locale : 'id',
                        "defaultDate": new Date(),
                    });
                });
            </script>
        </table>
		<input type="submit" value="Simpan Data">
	</form>

    <br>
	<a href="/mutasi">Kembali</a>
@endsection
