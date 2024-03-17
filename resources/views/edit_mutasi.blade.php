@extends('index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('mutasi'.'/'.$mutasi->id_mutasi.'/update') }}" method="post">
                        @csrf
                        <div class="modal-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-2" class="form-label">nik</label>
                                        <input type="text" id="uid" class="form-control" hidden>
                                        <select name="nik" class="form-select">
                                            @foreach($dapen as $d)
                                            <option value="{{ $d->nik }}">{{ $d->nik }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="field-3" class="form-label">Tanggal Mutasi</label>
                                        <input type="date" name="tgl_mutasi" class="form-control" value="{{ $mutasi->tgl_mutasi }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="field-3" class="form-label">Mutasi</label>
                                        <input type="text" name="mutasi" class="form-control" value="{{ $mutasi->mutasi }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary waves-effect" onclick="history.back()">Batal</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light text-white">Update</button>
                        </div>
    
                    </form>
    
                </div>
            </div>
    </div>

</div>
@endsection
