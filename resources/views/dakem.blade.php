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
                                    Data Kematian
                                </h4>
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Tanggal Kematian</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach($hasil as $dakem)
                                                <tr>
                                                <td>{{ $no++}}</td>
                                                <td>{{ $dakem->nik }}</td>
                                                <td>{{ $dakem->tgl_kematian }}</td>
                                                <td>
                                                <a href="{{ url('dakem').'/'.$dakem->id_dakem.'/edit' }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                                <a href="{{ url('dakem').'/'.$dakem->id_dakem.'/hapus' }}"onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-sm btn-outline-danger">Hapus</a>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">No.</label>
                                    <input type="text" class="form-control"  name="id_dakem" >
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Tanggal Kematian</label>
                                    <input type="date" class="form-control" name="tgl_kematian">
                                </div>
                            </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                            <!-- <button type="button" class="btn btn-info waves-effect waves-light" valu>Simpan</button> -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="proses">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection