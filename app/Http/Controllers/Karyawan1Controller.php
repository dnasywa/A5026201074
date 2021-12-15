<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class karyawan1Controller extends Controller
{
    public function index()
    {
        // pagination(row)
        $karyawan1 = DB::table('karyawan1')->paginate(2);

        // mengirim data karyawan1 ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    public function store(Request $request)
    {
        DB::table('karyawan1')->insert([ // call package dengan parameter array
            'NIP' => $request->nrp,
            'Nama' => $request->namaKaryawan,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji
        ]);

        return redirect('/karyawan1');
    }

    public function edit($id)
    {
        // mengambil data berdasarkan id
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();

        // passing data karyawan1 ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }

    public function update(Request $request)
    {
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'Nama' => $request->namaKaryawan,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji
        ]);

        return redirect('/karyawan1');
    }

    public function detail($id)
    {
        // mengambil data berdasarkan id
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();

        // passing data karyawan1 ke view view.blade.php
        return view('karyawan1.view', ['karyawan1' => $karyawan1]);
    }
}
