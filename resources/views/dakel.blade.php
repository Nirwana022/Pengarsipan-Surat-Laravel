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
                                    Data Kelahiran
                                </h4>
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <th>No</th>
                                            <th>No KK</th>
                                            <th>Nama</th>
                                            <th>Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach($hasil as $dakel)
                                                <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $dakel->no_kk }}</td>
                                                <td>{{ $dakel->nama }}</td>
                                                <td>{{ $dakel->jenis_kelamin }}</td>
                                                <td>{{ $dakel->tgl_lahir }}</td>
                                                <td>{{ $dakel->nama_ayah }}</td>
                                                <td>{{ $dakel->nama_ibu }}</td>
                                                <td>
                                                <a href="{{ url('/dakel'.'/'.$dakel->id_dakel.'/edit')}}" class="btn btn-outline-primary">Edit</a>
                                                <a href="{{ url('/dakel'.'/'.$dakel->id_dakel.'/hapus')}}"onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-outline-danger">Hapus</a>
                                                <a href="{{ url('dakel/print'.'/'.$dakel->id_dakel) }}" class="btn btn-outline-dark">Cetak</a>
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
                                    <input type="text" class="form-control"  name="id_dakel" >
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">No.KK</label>
                                    <input type="text" class="form-control" name="id_kk">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Tanggal Lahir.</label>
                                    <input type="date" class="form-control"  name="tgl_lahir" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Nama Ayah.</label>
                                    <input type="text" class="form-control"  name="nama_ayah" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control"  name="nama_ibu" >
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