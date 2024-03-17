@extends('index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Data User
                        </h4>
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </thead>
                                @foreach($hasil as $user)
                                        <tr>
                                        <td>{{ $user->id_user }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>********</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                        <a href="{{ url('user').'/'.$user->id_user.'/edit' }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{ url('user').'/'.$user->id_user.'/hapus' }}"onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-sm btn-outline-danger">Hapus</a>
                                        </td>
                                        </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/user/create')}}" method="post" >
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Username</label>
                                <input type="text" class="form-control"  name="username" >
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label">Role</label>
                                <input type="text" class="form-control" name="role">
                            </div>
                        </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                        <!-- <button type="button" class="btn btn-info waves-effect waves-light" valu>Simpan</button> -->
                        <input type="submit" class="btn btn-info waves-effect waves-light text-white" value="Proses">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection