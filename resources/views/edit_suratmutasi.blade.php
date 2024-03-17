@extends('index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{ url('suratmutasi'.'/'.$mutasi->no_surat.'/update') }}" method="POST">
        @csrf
        <div class="modal-body p-4">
            <div class="row">
            <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">No Surat</label>
                        <input type="text" class="form-control" name="no_surat" value="{{ $mutasi->no_surat }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{ $mutasi->nik }}" disabled >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-2" class="form-label">Tanggal Surat</label>
                        <input type="date" class="form-control" name="tgl_surat" value="{{ $mutasi->tgl_surat }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-2" class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" value="{{ $mutasi->status }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info waves-effect waves-light text-white">Update</button>
        </div>

    </form>

</div>
    </div>
</div>
@endsection