<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratmutasiModel;

class suratmutasiController extends Controller
{
    public function pindah(){
        $hasil = suratmutasiModel::All();
        return view('suratmutasi', ['hasil'=>$hasil]);
    }
    public function simpan_pindah(Request $request)
    {
        $pindah=new suratmutasiModel();
        $pindah->no_surat=$request->no_surat;
        $pindah->nik=$request->nik;
        $pindah->tgl_surat=$request->tgl_surat;
        $pindah->status=$request->status;
        $pindah->save();
        return redirect('suratmutasi');
    }
    public function edit_pindah(Request $request)
    {
        $mutasi=suratmutasiModel::find($request->no_surat);
        return view('edit_suratmutasi',compact('mutasi'));
    }
    public function update_pindah(Request $request)
    {
        $pindah=suratmutasiModel::find($request->no_surat);
        // $pindah->no_surat=$request->no_surat;
        // $pindah->nik=$request->nik;
        // $pindah->tgl_surat=$request->tgl_surat;
        $pindah->status=$request->status;
        $pindah->save();
        return redirect('suratmutasi');
    }
    public function destroy($no_surat)
    {
        $pindah=suratmutasiModel::find($no_surat);
        $pindah->delete();
        return redirect('suratmutasi');
    }
    public function print(Request $request)
    {
        $tb =suratmutasiModel::find($request->no_surat);
        $mutasi = $tb->join('tb_mutasi', 'tb_suratmutasi.nik', '=', 'tb_mutasi.nik')->join('tb_dapen', 'tb_mutasi.nik', '=', 'tb_dapen.nik')->get();
        return view('printmutasi', compact('mutasi'));
    }
}
