<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //index (menampilkan semua)
    public function index(){
        return Transaksi::all();
    }

    //index untuk create
    public function create(request $request){
        $transaksi = new Transaksi;
        $transaksi->tarik = $request->tarik;
        $transaksi->setor = $request->setor;
        $transaksi->save();

        return "Data Berhasil Dibuat!";
    }
    //index untuk update
    public function update(request $request, $idTransaksi){
        $tarik = $request->tarik;
        $setor = $request->setor;
      
        $transaksi = Transaksi::find($idTransaksi);
        $transaksi->tarik = $tarik;
        $transaksi->setor = $setor;
        $transaksi->save();

        return "Data Berhasil Diubah!";
    }
    public function delete($idTransaksi){
        $transaksi = Transaksi::find($idTransaksi);
        $transaksi->delete();

        return "Data Berhasil Dihapus!";
    }
}
