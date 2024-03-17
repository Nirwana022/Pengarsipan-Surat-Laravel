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
                            <form method="post" action="{{url('/user'.'/'.$akun->id_user.'/update')}}">
                            @csrf
                            <input type="text" name="username" value="{{ $akun->username }}" class="form-control"><br><br>
                            <input type="password" name="password" placeholder="password lama" class="form-control"><br><br>
                            <input type="password" name="password_b" placeholder="password baru" class="form-control"><br><br>
                            <input type="text" name="role" value="{{ $akun->role }}" class="form-control"><br><br>
                            <button type="submit" class="btn btn-primary">Proses</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
