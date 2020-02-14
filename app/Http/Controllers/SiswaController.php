<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
     //index (menampilkan semua)
     public function index(){
        return Siswa::all();
    }

    //index untuk create
    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->ttl = $request->ttl;
        $siswa->notelp = $request->notelp;
        $siswa->email = $request->email;
        $siswa->username = $request->username;
        $siswa->password = $request->password;
        $siswa->saldo = $request->saldo;
        $siswa->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request, $nis){
        $nis = $request->nis;
        $nama = $request->nama;
        $kelas = $request->kelas;
        $ttl = $request->ttl;
        $notelp = $request->notelp;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $saldo = $request->saldo;

        $siswa = Siswa::find($nis);
        $siswa->nama = $nama;
        $siswa->kelas = $kelas;
        $siswa->ttl = $ttl;
        $siswa->notelp = $notelp;
        $siswa->email = $email;
        $siswa->username = $username;
        $siswa->password = $password;
        $siswa->saldo = $saldo;
        $siswa->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($nis){
        $siswa = Siswa::find($nis);
        $siswa->delete();

        return "Data Berhasil Dihapus!";
    }
}
