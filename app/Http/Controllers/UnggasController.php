<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import query builder
use Illuminate\Support\Facades\DB;


class unggasController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel
        // $unggas = DB::table('unggas')->get();

        // pagination(row)
        $unggas = DB::table('unggas')->paginate(3);

        // mengirim data unggas ke view index
        return view('unggas.index', ['unggas' => $unggas]);
    }

    public function tambah()
    {
        return view('unggas.tambah');
    }

    public function store(Request $request)
    {
        DB::table('unggas')->insert([ // call package dengan parameter array
            // 'kodeunggas' => $request->kode,
            'namaunggas' => $request->merk,
            'jumlahunggas' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/unggas');
    }

    public function edit($id)
    {
        // mengambil data berdasarkan id
        $unggas = DB::table('unggas')->where('kodeunggas', $id)->get();

        // passing data unggas ke view edit.blade.php
        return view('unggas.edit', ['unggas' => $unggas]);
    }

    public function update(Request $request)
    {
        DB::table('unggas')->where('kodeunggas', $request->id)->update([
            'namaunggas' => $request->merk,
            'jumlahunggas' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/unggas');
    }

    public function hapus($id)
    {
        // menghapus data berdasarkan id
        DB::table('unggas')->where('kodeunggas', $id)->delete();

        return redirect('/unggas');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sesuai pencarian data
        $unggas = DB::table('unggas')
            ->where('namaunggas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data unggas ke view index
        return view('unggas.index', ['unggas' => $unggas]);
    }

    public function detail($id)
    {
        // mengambil data berdasarkan id
        $unggas = DB::table('unggas')->where('kodeunggas', $id)->get();

        // passing data unggas ke view detail.blade.php
        return view('unggas.detail', ['unggas' => $unggas]);
    }
}
