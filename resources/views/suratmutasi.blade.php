@extends('index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Pengantar Mutasi
                        </h4>
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light mt-2" data-bs-toggle="modal" data-bs-target="#modal-tambah">Tambah Data +</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>tanggal surat</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($hasil as $pindah)
                                        <tr>
                                        <td>{{ $pindah->no_surat }}</td>
                                        <td>{{ $pindah->nik }}</td>
                                        <td>{{ $pindah->tgl_surat }}</td>
                                        <td>{{ $pindah->status }}</td>
                                        <td>
                                        <a href="{{ url('suratmutasi/' . $pindah->no_surat . '/print') }}" class="btn btn-success btn-sm">Print</a>
                                        <a href="{{ url('suratmutasi/').'/'.$pindah->no_surat.'/edit' }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ url('suratmutasi/').'/'.$pindah->no_surat.'/hapus' }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');">Hapus</a>
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
            <form action="{{ url('suratmutasi/create') }}" method="POST">
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
                                <label for="text-input2" class="form-label">NIK</label>
                                <label for="text-input2" class="form-label">NIK</label>
                                <select name="nik" id="nik" class="form-select">
                                    @foreach(\App\Models\suratmutasiModel::all() as $mutasi)
                                        <option value="{{ $mutasi->nik }}">{{ $mutasi->nik }}</option>
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