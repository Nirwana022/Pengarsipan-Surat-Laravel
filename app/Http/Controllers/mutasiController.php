<?php

namespace App\Http\Controllers;

use App\Models\dapenModel;
use Illuminate\Http\Request;
use App\Models\mutasiModel;

class mutasiController extends Controller
{
    public function semua_mutasi(){
        $hasil = mutasiModel::All();
        $dapen = dapenModel::all();
        return view('mutasi', compact(['hasil', 'dapen']));
    }

    public function simpan_mutasi(Request $request)
    {
        $mutasi=new mutasiModel();
        // $mutasi->id_mutasi=$request->id_mutasi;
        $mutasi->nik=$request->nik;
        $mutasi->tgl_mutasi=$request->tgl_mutasi;
        $mutasi->mutasi=$request->mutasi;
        $mutasi->save();
        return redirect('mutasi');
    }

    public function edit_mutasi(Request $request)
    {
        $mutasi=mutasiModel::find($request->id_mutasi);
        $dapen = dapenModel::all();
        return view('edit_mutasi',compact(['mutasi', 'dapen']));
    }
    public function update_mutasi(Request $request)
    {
        $mutasi=mutasiModel::find($request->id_mutasi);
        // $mutasi->id_mutasi=$request->id_mutasi;
        $mutasi->nik=$request->nik;
        $mutasi->tgl_mutasi=$request->tgl_mutasi;
        $mutasi->mutasi=$request->mutasi;
        $mutasi->save();
        return redirect('mutasi');
    }
    public function destroy($id_mutasi)
    {
        $mutasi=mutasiModel::find($id_mutasi);
        $mutasi->delete();
        return redirect('mutasi');
    }
}