@extends('index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Pengantar Kelahiran
                        </h4>
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <th>No</th>
                                    <th>KK</th>
                                    <th>tanggal surat</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($hasil as $lahir)
                                        <tr>
                                        <td>{{ $lahir->no_surat }}</td>
                                        <td>{{ $lahir->id_kk }}</td>
                                        <td>{{ $lahir->tgl_surat }}</td>
                                        <td>{{ $lahir->status }}</td>
                                        <td>
                                        <a href="{{ url('suratlahir/' . $lahir->no_surat . '/print') }}" class="btn btn-success btn-sm">Print</a>
                                        <a href="{{ url('suratlahir').'/'.$lahir->no_surat.'/edit' }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ url('suratlahir').'/'.$lahir->no_surat.'/hapus' }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a>
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
            <form action="{{ url('suratlahir/create') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">No Surat</label>
                                <input type="text" class="form-control" name="no_surat">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="text-input2" class="form-label">No KK</label>
                                <select name="id_kk" id="nik" class="form-select">
                                    @foreach(\App\Models\dakelModel::all() as $l)
                                        <option value="{{ $l->id_kk }}">{{ $l->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Tanggal Surat</label>
                                <input type="date" class="form-control" name="tgl_surat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Status</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light text-white">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection