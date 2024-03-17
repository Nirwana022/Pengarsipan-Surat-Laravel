<?php

namespace App\Http\Controllers;

use App\Models\suratmatiModel;
use Illuminate\Http\Request;

class suratmatiController extends Controller
{
    //
    public function semua_mati(){
        $hasil = suratmatiModel::All();
        return view('suratmati', ['hasil'=>$hasil]);
    }
    public function simpan_mati(Request $request)
    {
        $mati=new suratmatiModel();
        $mati->no_surat=$request->no_surat;
        $mati->nik=$request->nik;
        $mati->tgl_surat=$request->tgl_surat;
        $mati->status=$request->status;
        $mati->save();
        return redirect('suratmati');
    }
    public function edit_mati($no_surat)
    {
        $mati=suratmatiModel::find($no_surat);
        return view('edit_suratmati',compact('mati'));
    }
    public function update_mati(Request $request)
    {
        $mati=suratmatiModel::find($request->no_surat);
        // $mati->no_surat=$request->no_surat;
        // $mati->nik=$request->nik;
        // $mati->tgl_surat=$request->tgl_surat;
        $mati->status=$request->status;
        $mati->save();
        return redirect('suratmati');
    }
    public function destroy($no_surat)
    {
        $mati=suratmatiModel::find($no_surat);
        $mati->delete();
        return redirect('suratmati');
    }
    public function print(Request $request)
    {
        $tb =suratmatiModel::where('no_surat',$request->no_surat);
        $mati = $tb->join('tb_dakem', 'tb_suratmati.nik', '=', 'tb_dakem.nik')->join('tb_dapen', 'tb_dakem.nik', '=', 'tb_dapen.nik')
        ->get();
        return view('printmati', compact('mati'));
    }
}
