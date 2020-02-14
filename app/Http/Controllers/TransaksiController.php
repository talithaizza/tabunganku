<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    //index (menampilkan semua)
    public function index(){
        return Transaksi::all();
    }

    //index untuk create
    public function create(request $request){
        $transaksi = new Transaksi;
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->jenis_transaksi = $request->jenis_transaksi;
        $transaksi->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request, $id){
        $kode_transaksi = $request->kode_transaksi;
        $jenis_transaksi = $request->jenis_transaksi;
      
        $transaksi = Transaksi::find($id);
        $transaksi->kode_transaksi = $kode_transaksi;
        $transaksi->jenis_transaksi = $jenis_transaksi;
        $transaksi->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return "Data Berhasil Dihapus!";
    }
}
