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
        $mutasi = DB::table('mutasi')->get(); // hasil berupa array of object

        // mengirim data mutasi ke view index
        return view('mutasi.index', ['mutasi' => $mutasi]); // passing value controller-view
    }

    // method untuk menampilkan view form tambah mutasi
    public function tambah()
    {

        // memanggil view tambah
        return view('mutasi.tambah');
    }

    // method untuk insert data ke table mutasi
    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('mutasi')->insert([ // call package dengan parameter array
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->dept,
            'SubDepartemen' => $request->subDept,
            'MulaiBertugas' => $request->bertugas
        ]);

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

    // method untuk edit data mutasi
    public function edit($id)
    {
        // mengambil data mutasi berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();
        // passing data mutasi yang didapat ke view edit.blade.php
        return view('mutasi.edit', ['mutasi' => $mutasi]);
    }

    // update data mutasi
    public function update(Request $request)
    {
        // update data mutasi
        DB::table('mutasi')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->dept,
            'SubDepartemen' => $request->subDept,
            'MulaiBertugas' => $request->bertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

    // method untuk hapus data mutasi
    public function hapus($id)
    {
        // menghapus data mutasi berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID', $id)->delete();

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
}
