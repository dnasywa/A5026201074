{{-- <html> --}}

    @extends('layout.bahagia')

    @section('title', 'Mengedit Data Mutasi')
    @section('judulhalaman', 'Edit Mutasi Pegawai')
    @section('konten')

    <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
        <table>
            <tr> <input type="hidden" name="id" value="{{ $m->ID }}"> </tr>
            <tr>
                <td class="isi-tabel">ID Pegawai</td>
                <td class="isi-tabel"> <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Departemen</td>
                <td class="isi-tabel"> <input type="text" required="required" name="dept" value="{{ $m->Departemen }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Sub Departemen</td>
                <td class="isi-tabel"> <input type="text" required="required" name="subDept" value="{{ $m->SubDepartemen }}"> </td>
            </tr>
            <tr>
                <td class="isi-tabel">Mulai Bertugas</td>
                <td class="isi-tabel" style="width: 100%">
                    <input type="datetime-local" required="required" name="bertugas" value="{{ $m->MulaiBertugas }}">
                    {{-- <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $m->MulaiBertugas }}" required="required" />
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
		{{-- <input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="dept" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="subDept" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" required="required" name="bertugas" value="{{ $m->MulaiBertugas }}"> <br/><br> --}}

		<input type="submit" value="Simpan Perubahan">
	</form>
	@endforeach

    <br>
    <a href="/mutasi">Kembali</a>
@endsection

{{-- </body> --}}
{{-- </html> --}}
