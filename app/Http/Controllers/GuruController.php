<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //index (menampilkan semua)
    public function index(){
        return Guru::all();
    }

    //index untuk create
    public function create(request $request){
        $guru = new Guru;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->notelp = $request->notelp;
        $guru->email = $request->email;
        $guru->username = $request->username;
        $guru->password = $request->password;
        $guru->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request, $nip){
        $nip = $request->nip;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $notelp = $request->notelp;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;

        $guru = Guru::find($nip);
        $guru->nama = $nama;
        $guru->alamat = $alamat;
        $guru->notelp = $notelp;
        $guru->email = $email;
        $guru->username = $username;
        $guru->password = $password;
        $guru->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($nip){
        $guru = Guru::find($nip);
        $guru->delete();

        return "Data Berhasil Dihapus!";
    }
}
