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
                <form action="{{url('/kk'.'/'.$kk->id_kk.'/update')}}" method="post" >
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">No Kartu Keluarga</label>
                                    <input type="text" class="form-control" name="no_kk" value="{{ $kk->no_kk }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">nik</label>
                                    <input type="text" class="form-control" name="nik" value="{{ $kk->nik }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">SHDK</label>
                                    <input type="text" name="shdk" value="{{ $kk->shdk }}" class="form-control">
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
