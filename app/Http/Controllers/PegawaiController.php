<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import query builder
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
        //panggil query builder
        // DB::table('')->get();

        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get(); // hasil berupa array of object

        // pagination(row)
        $pegawai = DB::table('pegawai')->paginate(10);

        // mengirim data pegawai ke view index
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawai.tambah');
    }

    public function store(Request $request)
    {
        DB::table('pegawai')->insert([ // call package dengan parameter array
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        return redirect('/pegawai');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->orWhere('pegawai_alamat', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pegawai.detail', ['pegawai' => $pegawai]);
    }
}
