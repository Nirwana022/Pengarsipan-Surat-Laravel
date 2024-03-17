@extends('index')
@section('content')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Edit Data
                                </h4>
                           </div>
                            <div class="card-body">
                            <form method="post" action="{{url('/editdapen'.'/'.$penduduk->nik)}}">
                            @csrf
                            <input type="text" name="nik" value="{{ $penduduk->nik }}" class="form-control" readonly><br><br>
                            <input type="text" name="nama" value="{{ $penduduk->nama }}" class="form-control"><br><br>
                            <input type="text" name="jenis_kelamin" value="{{ $penduduk->jenis_kelamin }}" class="form-control"><br><br>
                            <input type="text" name="tempat_lahir" value="{{ $penduduk->tempat_lahir }}" class="form-control"><br><br>
                            <input type="text" name="tgl_lahir" value="{{ $penduduk->tgl_lahir }}" class="form-control"><br><br>
                            <input type="text" name="agama" value="{{ $penduduk->agama }}" class="form-control"><br><br>
                            <input type="text" name="pendidikan" value="{{ $penduduk->pendidikan }}" class="form-control"><br><br>
                            <input type="text" name="pekerjaan" value="{{ $penduduk->pekerjaan }}" class="form-control"><br><br>
                            <input type="text" name="status_kawin" value="{{ $penduduk->status_kawin }}" class="form-control"><br><br>
                            <input type="text" name="kewarganegaraan" value="{{ $penduduk->kewarganegaraan }}" class="form-control"><br><br>
                            <input type="text" name="kode_pos" value="{{ $penduduk->kode_pos }}" class="form-control"><br><br>
                            <input type="submit" value="proses" class="btn btn-primary">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
