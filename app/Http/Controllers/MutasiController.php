<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import query builder
use Illuminate\Support\Facades\DB;


class mutasiController extends Controller
{
    public function index()
    {
        // mengambil data dari table mutasi
        // $mutasi = DB::table('mutasi')->get();

        // pagination and join index
        $mutasi = DB::table('mutasi')
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('mutasi.*', 'pegawai.pegawai_nama')
            ->paginate();

        // mengirim data mutasi ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]); // passing value controller-view
    }

    public function tambah()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        // return view('mutasi.tambah');
        return view('mutasi.tambah', ['pegawai' => $pegawai]);
    }

    public function store(Request $request)
    {
        DB::table('mutasi')->insert([ // call package dengan parameter array
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->dept,
            'SubDepartemen' => $request->subDept,
            'MulaiBertugas' => $request->bertugas
        ]);

        return redirect('/mutasi');
    }

    public function edit($id)
    {
        // mengambil data mutasi berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();

        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        $judul = "Hallo Apa kabar";

        // passing data mutasi yang didapat ke view edit.blade.php
        // return view('mutasi.edit', ['mutasi' => $mutasi]);
        return view('mutasi.edit', ['mutasi' => $mutasi, 'pegawai' => $pegawai, 'judul' => $judul]);
    }

    public function update(Request $request)
    {
        DB::table('mutasi')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->dept,
            'SubDepartemen' => $request->subDept,
            'MulaiBertugas' => $request->bertugas
        ]);

        return redirect('/mutasi');
    }

    public function hapus($id)
    {
        // menghapus data mutasi berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID', $id)->delete();

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sesuai pencarian data
        $mutasi = DB::table('mutasi')
            ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('mutasi.*', 'pegawai.pegawai_nama')
            ->where('Departemen', 'like', "%" . $cari . "%")
            ->orWhere('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data unggas ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }

}
