<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisTabungan;

class JenisTabunganController extends Controller
{
    //index (menampilkan semua)
    public function index(){
        return JenisTabungan::all();
    }

    //index untuk create
    public function create(request $request){
        $JenisTabungan = new JenisTabungan;
        $JenisTabungan->namatabungan = $request->namatabungan;
        $JenisTabungan->deskripsi = $request->deskripsi;
        $JenisTabungan->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request,$id){
        $namatabungan = $request->namatabungan;
        $deskripsi = $request->deskripsi;
       
        $JenisTabungan = JenisTabungan::find($id);
        $JenisTabungan->namatabungan = $namatabungan;
        $JenisTabungan->deskripsi = $deskripsi;
        $JenisTabungan->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($id){
        $JenisTabungan = Kelas::find($id);
        $JenisTabungan->delete();

        return "Data Berhasil Dihapus!";
    }
}
