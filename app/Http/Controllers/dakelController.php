<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dakelModel;

class dakelController extends Controller
{
    public function semua_dakel()
    {
        $tb = new dakelModel;
        $hasil = $tb->join('tb_kk', 'tb_dakel.id_kk', '=', 'tb_kk.id_kk')->get();
        return view('dakel', ['hasil'=>$hasil]);
    }

    public function print_dakel($id_dakel)
    {
        $tb = dakelModel::find($id_dakel);

        $hasil = $tb->join('tb_suratlahir', 'tb_dakel.id_kk', '=', 'tb_suratlahir.id_kk')
        ->join('tb_kk', 'tb_dakel.id_kk', '=', 'tb_kk.id_kk')->get();

        return view('print_dakel', compact('hasil'));
    }

    public function simpan_dakel(Request $request)
    {
        $lahir=new dakelModel();
        $lahir->id_dakel=$request->id_dakel;
        $lahir->id_kk=$request->id_kk;
        $lahir->nama=$request->nama;
        $lahir->jenis_kelamin=$request->jenis_kelamin;
        $lahir->tgl_lahir=$request->tgl_lahir;
        $lahir->nama_ayah=$request->nama_ayah;
        $lahir->nama_ibu=$request->nama_ibu;
        $lahir->save();
        return redirect('dakel');
    }

    public function edit_dakel($id_dakel)
    {
        $id = $id_dakel;
        $tb = dakelModel::where('id_dakel',$id_dakel);
        $lahir = $tb->join('tb_kk', 'tb_dakel.id_kk', '=', 'tb_kk.id_kk')->get();
        return view('edit_dakel',compact(['lahir', 'id']));
    }

    public function update_dakel(Request $request)
    {
        $lahir=dakelModel::find($request->id_dakel);
        $lahir->id_kk=$request->id_kk;
        $lahir->nama=$request->nama;
        $lahir->jenis_kelamin=$request->jenis_kelamin;
        $lahir->tgl_lahir=$request->tgl_lahir;
        $lahir->nama_ayah=$request->nama_ayah;
        $lahir->nama_ibu=$request->nama_ibu;
        $lahir->save();
        return redirect('dakel');
    }

    public function destroy($id_dakel)
    {
        $lahir=dakelModel::find($id_dakel);
        $lahir->delete();
        return redirect('dakel');
    }
}
