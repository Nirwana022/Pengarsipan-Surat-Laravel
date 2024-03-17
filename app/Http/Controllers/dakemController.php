<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dakemModel;

class dakemController extends Controller
{
    public function semua_dakem(){
        $hasil = dakemModel::All();
        return view('dakem', ['hasil'=>$hasil]);
    }
    public function simpan_dakem(Request $request)
    {
        $mati=new dakemModel();
        $mati->id_dakem=$request->id_dakem;
        $mati->nik=$request->nik;
        $mati->tgl_kematian=$request->tgl_kematian;
        $mati->save();
        return redirect('dakem');
    }

    public function edit_dakem($id_dakem)
    {
        $mati = dakemModel::find($id_dakem);

        return view('edit_dakem',compact('mati'));
    }
    public function update_dakem(Request $request)
    {
        $mati=dakemModel::find($request->id_dakem);
        // $mati->id_dakem=$request->id_dakem;
        $mati->nik=$request->nik;
        $mati->tgl_kematian=$request->tgl_kematian;
        $mati->save();
        return redirect('dakem');
    }
    public function destroy($id_dakem)
    {
        $mati=dakemModel::find($id_dakem);
        $mati->delete();
        return redirect('dakem');
    }
}
