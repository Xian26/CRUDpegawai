<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function tampil(){
        $pegawai = Pegawai::get();
        return view('pegawai.tampil', compact('pegawai'));
    }

    function tambah(){
        return view('pegawai.tambah');
    }

    function submit(Request $request){
        $pegawai = new Pegawai();
        $pegawai->nip = $request-> nip;
        $pegawai->nama = $request-> nama;
        $pegawai->no_telp = $request-> no_telp;
        $pegawai->jenis_kelamin = $request-> jenis_kelamin;
        $pegawai->save();

        return redirect() ->route('pegawai.tampil');
    }

    function edit($id){
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    function update(Request $request, $id){
        $pegawai = Pegawai::find($id);
        $pegawai->nip = $request-> nip;
        $pegawai->nama = $request-> nama;
        $pegawai->no_telp = $request-> no_telp;
        $pegawai->jenis_kelamin = $request-> jenis_kelamin;
        $pegawai->update();

        return redirect() ->route('pegawai.tampil');
    }

    function delete($id){
        $pegawai = Pegawai::find($id);
        $pegawai -> delete();
        return redirect() ->route('pegawai.tampil');
    }

}
