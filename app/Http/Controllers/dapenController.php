<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dapenModel;

class dapenController extends Controller
{
    public function semua_dapen(){
        $hasil = dapenModel::All();
        return view('dapen', ['hasil'=>$hasil]);
    }
    public function print_dapen(){
        $hasil = dapenModel::All();
        return view('print_dapen', ['hasil'=>$hasil]);
    }
    public function simpan_dapen(Request $request)
    {
        $penduduk=new dapenModel();
        $penduduk->nik=$request->nik;
        $penduduk->nama=$request->nama;
        $penduduk->jenis_kelamin=$request->jenis_kelamin;
        $penduduk->tempat_lahir=$request->tempat_lahir;
        $penduduk->tgl_lahir=$request->tgl_lahir;
        $penduduk->agama=$request->agama;
        $penduduk->pendidikan=$request->pendidikan;
        $penduduk->pekerjaan=$request->pekerjaan;
        $penduduk->status_kawin=$request->status_kawin;
        $penduduk->kewarganegaraan=$request->kewarganegaraan;
        $penduduk->kode_pos=$request->kode_pos;
        $penduduk->save();
        return redirect('dapen');
    }
    public function edit_dapen(Request $request)
    {
        $penduduk=dapenModel::find($request->nik);
        return view('edit_dapen',compact('penduduk'));
    }
    public function update_dapen(Request $request)
    {
        $penduduk=dapenModel::find($request->nik);
        $penduduk->nama=$request->nama;
        $penduduk->jenis_kelamin=$request->jenis_kelamin;
        $penduduk->tempat_lahir=$request->tempat_lahir;
        $penduduk->tgl_lahir=$request->tgl_lahir;
        $penduduk->agama=$request->agama;
        $penduduk->pendidikan=$request->pendidikan;
        $penduduk->pekerjaan=$request->pekerjaan;
        $penduduk->status_kawin=$request->status_kawin;
        $penduduk->kewarganegaraan=$request->kewarganegaraan;
        $penduduk->kode_pos=$request->kode_pos;
        $penduduk->save();
        return redirect('dapen');
    }
    public function destroy($nik)
    {
        $penduduk=dapenModel::find($nik);
        $penduduk->delete();
        return redirect('dapen');
    }
}