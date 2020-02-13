<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    //index (menampilkan semua)
     public function index(){
        return Kelas::all();
    }

    //index untuk create
    public function create(request $request){
        $kelas = new Kelas;
        $kelas->kelas = $request->kelas;
        $kelas->walikelas = $request->walikelas;
        $kelas->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request, $kelas){
        $kelas = $request->kelas;
        $walikelas = $request->walikelas;
       
        $kelas = Kelas::find($kelas);
        $kelas->nama = $nama;
        $kelas->walikelas = $walikelas;
        $kelas->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($kelas){
        $kelas = Kelas::find($kelas);
        $kelas->delete();

        return "Data Berhasil Dihapus!";
    }
}
