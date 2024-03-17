@extends('index')
@section('content')
@php $no = 1; @endphp
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/dakem'.'/'.$mati->id_dakem.'/update')}}" method="post" >
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">No Kartu Keluarga</label>
                                    <input type="text" class="form-control" name="nik" value="{{ $mati->nik }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">nik</label>
                                    <input type="date" class="form-control" name="tgl_kematian" value="{{ $mati->tgl_kematian }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary waves-effect" onclick="history.back()">batal</button>
                            <!-- <button type="button" class="btn btn-info waves-effect waves-light" valu>Simpan</button> -->
                            <button type="submit" class="btn btn-info waves-effect waves-light text-white">proses</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
