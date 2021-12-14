
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

   <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

{{-- <h3>{{ $judul }}</h3> --}}

	@foreach($absen as $a)

	<form action="/absen/update" method="post">
		{{ csrf_field() }}

        <table>
            <tr>
                <input type="hidden" name="id" value="{{ $a->ID }}">
                <td class="isi-tabel">ID Pegawai</td>
                <td class="isi-tabel">
                    <select name="idpegawai" >
                        @foreach($pegawai as $p)
                         <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <div class="form-group">
                    <td class="isi-tabel">
                        <label for="dtpickerdemo">Tanggal</label> {{-- class="col-sm-2 control-label"--}}
                    </td>
                    <td class="isi-tabel" style="width: 100%">
                        <input type="datetime-local" required="required" name="tanggal">
                        {{-- <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div> --}}
                    </td>
                </div>
            </tr>
            {{-- <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: 'YYYY-MM-DD hh:mm:ss',
                        showTodayButton: false,
                        locale : 'id',
                        "defaultDate": new Date(),
                    });
                });
            </script> --}}
            <tr>
                <td class="isi-tabel">Status</td>
                <td class="isi-tabel">
                    <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                    <label for="html">Izin</label>
                    <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                    <label for="css">Sakit</label>
                    <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                    <label for="javascript">Alpha</label>
                </td>
            </tr>
        </table>

    <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach

   <p> <a href="/absen"> Kembali</a></p>
   @endsection
