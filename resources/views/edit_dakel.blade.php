@extends('index')
@section('content')
@foreach($lahir as $row)
@endforeach
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
                            <form method="post" action="{{url('/editdakel'.'/'.$row->id_dakel)}}">
                            @csrf
                            <input type="text" name="id_dakel" value="{{ $row->id_dakel }}" class="form-control" readonly><br><br>
                            <input type="text" name="id_kk" value="{{ $row->id_kk }}" class="form-control"><br><br>
                            <input type="text" name="nama" value="{{ $row->nama }}" class="form-control"><br><br>
                            <input type="text" name="jenis_kelamin" value="{{ $row->jenis_kelamin }}" class="form-control"><br><br>
                            <input type="text" name="tgl_lahir" value="{{ $row->tgl_lahir }}" class="form-control"><br><br>
                            <input type="text" name="nama_ayah" value="{{ $row->nama_ayah }}" class="form-control"><br><br>
                            <input type="text" name="nama_ibu" value="{{ $row ->nama_ibu }}" class="form-control"><br><br>
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
