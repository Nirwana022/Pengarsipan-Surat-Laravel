<?php

namespace App\Http\Controllers;

use App\Models\suratlahirModel;
use Illuminate\Http\Request;

class suratlahirController extends Controller
{
    //
    public function semua_lahir(){
        $hasil = suratlahirModel::All();
        return view('suratlahir', ['hasil'=>$hasil]);
    }
    public function simpan_lahir(Request $request)
    {
        $lahir=new suratlahirModel();
        $lahir->no_surat=$request->no_surat;
        $lahir->id_kk=$request->id_kk;
        $lahir->tgl_surat=$request->tgl_surat;
        $lahir->status=$request->status;
        $lahir->save();
        return redirect('suratlahir');
    }
    public function edit_lahir($no_surat)
    {
        $lahir=suratlahirModel::find($no_surat);
        return view('edit_suratlahir',compact('lahir'));
    }
    public function update_lahir(Request $request)
    {
        $lahir=suratlahirModel::find($request->no_surat);
        $lahir->status=$request->status;
        $lahir->save();
        return redirect('suratlahir');
    }
    public function destroy($no_surat)
    {
        $lahir=suratlahirModel::find($no_surat);
        $lahir->delete();
        return redirect('suratlahir');
    }
    public function print(Request $request)
    {
        $tb =suratlahirModel::where('no_surat',$request->no_surat);
        $lahir = $tb->join('tb_dakel', 'tb_suratlahir.id_kk', '=', 'tb_dakel.id_kk')->join('tb_kk', 'tb_dakel.id_kk', '=', 'tb_kk.id_kk')
        ->get();
        return view('printlahir', compact('lahir'));
    }
}
