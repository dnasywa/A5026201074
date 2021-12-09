
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')

   <style>
        .isi-tabel {
            padding: 10px;
        }
    </style>

    {{-- @foreach($absen as $a) --}}

    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <table>
            <tr>
                <td class="isi-tabel">ID Pegawai</td>
                <td class="isi-tabel">
                    <select name="idpegawai"  style="width: 30%">
                        @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <div class="form-group">
                    <td class="isi-tabel">
                        <label for="dtpickerdemo">Tanggal</label> {{-- class="col-sm-2 control-label" --}}
                    </td>
                    <td class="isi-tabel" style="width: 100%">
                        <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" /> {{-- value="{{ $a->Tanggal }}" --}}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </td>
                </div>
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
            <tr>
                <td class="isi-tabel">Status</td>
                <td class="isi-tabel">
                    <input type="radio" id="html" name="status" value="I">
                    <label for="html">Izin</label>
                    <input type="radio" id="css" name="status" value="S" checked="checked">
                    <label for="css">Sakit</label>
                    <input type="radio" id="javascript" name="status" value="A">
                    <label for="javascript">Alpha</label>
                </td>
            </tr>
        </table>

        {{-- IDPegawai
        <select name="idpegawai" >
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br> --}}

        {{-- <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" /> {{-- value="{{ $a->Tanggal }}"
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script> --}}

        {{-- Status <br/>
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label> --}}

        <p><input type="submit" value="Simpan Data"></p>
    </form>
    <p> <a href="/absen"> Kembali</a></p>
    {{-- @endforeach --}}
@endsection
