<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function indexabsen()
    {
        // mengambil data dari table absen
        // $absen = DB::table('absen')->get();

        // pagination and join index
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('absen.*', 'pegawai.pegawai_nama')
            ->paginate();

        // mengirim data absen ke view indexabsen
        return view('absen.indexabsen', ['absen' => $absen]);
    }

    public function add()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        return view('absen.add', ['pegawai' => $pegawai]);
    }

    public function store(Request $request)
    {
        DB::table('absen')->insert([

            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);

        return redirect('/absen');
    }

    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('ID', $id)->get();

        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        $judul = "Hallo Apa kabar";

        // passing data absen yang didapat ke view update.blade.php
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai, 'judul' => $judul]);
    }

    public function update(Request $request)
    {
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);

        return redirect('/absen');
    }

    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absen')->where('ID', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sesuai pencarian data
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('absen.*', 'pegawai.pegawai_nama')
            ->where('Status', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data unggas ke view index
        return view('absen.indexabsen', ['absen' => $absen]);
    }

    public function detail($id)
    {
        // mengambil data berdasarkan id
        $absen = DB::table('absen')->where('ID', $id)->get();

        // passing data unggas ke view detail.blade.php
        return view('absen.detail', ['absen' => $absen]);
    }
}
