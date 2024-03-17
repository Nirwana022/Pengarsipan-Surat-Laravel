@extends('index')
@section('content')
@php $no = 1 @endphp
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Data Kartu Keluarga
                        </h4>
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>NIK</th>
                                    <th>SHDK</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($hasil as $kk)
                                        <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $kk->no_kk }}</td>
                                        <td>{{ $kk->nik }}</td>
                                        <td>{{ $kk->shdk }}</td>
                                        <td>
                                        <a href="{{ url('kk').'/'.$kk->id_kk.'/edit' }}" class="btn btn-sm btn-outline-primary">Edit</a>&nbsp;&nbsp;&nbsp;
                                        <a href="{{ url('kk').'/'.$kk->id_kk.'/hapus' }}"onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-sm btn-outline-danger">Hapus</a>
                                        </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
                <form action="{{url('/create')}}" method="post" >
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">No Kartu Keluarga</label>
                                    <input type="text" class="form-control" id="no_kk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">nik</label>
                                    <input type="text" class="form-control" id="no_kk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">SHDK</label>
                                    <input type="text" id="shdk" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                            <!-- <button type="button" class="btn btn-info waves-effect waves-light" valu>Simpan</button> -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="proses">
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" htmlspecialchars>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">No Kartu Keluarga</label>
                                    <input type="text" class="form-control" id="uid" hidden>
                                    <input type="text" class="form-control" id="uno_kk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">nik</label>
                                    <select id="unik" class="form-select">
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">SHDKs</label>
                                    <input type="utext" id="ushdk" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="updatedata()">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection