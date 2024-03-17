<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratktpModel;

class suratktpController extends Controller
{
    public function semua_ktp(){
        $hasil = suratktpModel::All();
        return view('suratktp', ['hasil'=>$hasil]);
    }
    public function simpan_ktp(Request $request)
    {
        $ktp=new suratktpModel();
        $ktp->no_surat=$request->no_surat;
        $ktp->nik=$request->nik;
        $ktp->tgl_surat=$request->tgl_surat;
        $ktp->status=$request->status;
        $ktp->save();
        return redirect('suratktp');
    }
    public function edit_ktp($no_surat)
    {
        $ktp=suratktpModel::find($no_surat);
        return view('edit_suratktp',compact('ktp'));
    }
    public function update_ktp(Request $request)
    {
        $ktp=suratktpModel::find($request->no_surat);
        // $ktp->no_surat=$request->no_surat;
        // $ktp->nik=$request->nik;
        // $ktp->tgl_surat=$request->tgl_surat;
        $ktp->status=$request->status;
        $ktp->save();
        return redirect('ktp');
    }
    public function destroy($no_surat)
    {
        $ktp=suratktpModel::find($no_surat);
        $ktp->delete();
        return redirect('ktp');
    }
    public function print(Request $request)
    {
        $ktp =suratktpModel::find($request->no_surat);
        return view('printktp', compact('ktp'));
    }
}
