<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkModel;

class kkController extends Controller
{
    public function semua_kk(){
        $hasil = kkModel::All();
        return view('kk', ['hasil'=>$hasil]);
    }
    public function simpan_kk(Request $request)
    {
        $kk=new kkModel();
        $kk->id_kk=$request->id_kk;
        $kk->no_kk=$request->no_kk;
        $kk->nik=$request->nik;
        $kk->shdk=$request->shdk;
        $kk->save();
        return redirect('kk');
    }
    public function edit_kk(Request $request)
    {
        $kk=kkModel::find($request->id_kk);
        return view('edit_kk',compact('kk'));
    }
    public function update_kk(Request $request)
    {
        $kk=kkModel::find($request->id);
        // $kk->id_kk=$request->id_kk;
        $kk->no_kk=$request->no_kk;
        $kk->nik=$request->nik;
        $kk->shdk=$request->shdk;
        $kk->save();
        return redirect('kk');
    }
    public function destroy($id_kk)
    {
        $kk=kkModel::find($id_kk);
        $kk->delete();
        return redirect('kk');
    }
}
