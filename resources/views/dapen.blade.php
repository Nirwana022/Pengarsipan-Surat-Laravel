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
                            Data Penduduk
                        </h4>
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                    </div>
                    <div class="card-body">
                    <div class="col-6">
                                    <a href="{{ url('dapen/print') }}" class="btn btn-outline-dark">Laporan</a>
                                </div>
                                <br>
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <th>NO</th>
                                    <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>Kelamin</th>
                                    <th>TTL</th>
                                    <th>Agama</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Status</th>
                                    <th>kewarganegaraan</th>
                                    <th>kode pos</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($hasil as $dapen)
                                        <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $dapen->nik }}</td>
                                        <td>{{ $dapen->nama }}</td>
                                        <td>{{ $dapen->jenis_kelamin }}</td>
                                        <td>{{ $dapen->tempat_lahir }}, {{ $dapen->tgl_lahir }}</td>
                                        <td>{{ $dapen->agama }}</td>
                                        <td>{{ $dapen->pendidikan }}</td>
                                        <td>{{ $dapen->pekerjaan }}</td>
                                        <td>{{ $dapen->status_kawin }}</td>
                                        <td>{{ $dapen->kewarganegaraan }}</td>
                                        <td>{{ $dapen->kode_pos }}</td>
                                        <td>
                                        <a href="{{ url('/dapen'.'/'.$dapen->nik.'/edit')}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{ url('dapen').'/'.$dapen->nik.'/hapus' }}"onclick="return confirm('Yakin Ingin Menghapus Data Ini?');" class="btn btn-sm btn-outline-danger">Hapus</a>
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
        <form action="{{url('/dapen/create')}}" method="post" >
            @csrf
            <div class="modal-body p-4">
                <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin">
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-3" class="form-label">Agama</label>
                            <select class="form-select" name="agama">
                                <option value="islam">islam</option>
                                <option value="khatolik">khatolik</option>
                                <option value="protestan">protestan</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-7" class="form-label">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-7" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-7" class="form-label">Status Kawin</label>
                            <select class="form-select" name="status_kawin">
                                <option value="menikah">Menikah</option>
                                <option value="belum menikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-7" class="form-label">kewarganegaraan</label>
                            <input type="text" class="form-control" name="kewarganegaraan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-7" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" name="kode_pos">
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