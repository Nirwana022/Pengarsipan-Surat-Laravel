{{-- @extends('index')
@section('content') --}}
@foreach($hasil as $row)
@endforeach
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }
    
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    th, td { padding: .5rem}
    .date {
        text-align: right;
        margin-bottom: 20px;
    }
    .container {
        display: flex;
        justify-content: flex-end;
    }
    .content {
        margin-bottom: 20px;
    }
    .content1 {
        width: 40%;
    }
    .footer {
        text-align: center;
    }
</style>
<div class="header">
    <h3><b>PEMERINTAH KOTA TIDORE KEPULAUAN<br>KECAMATAN TIDORE UTAMA<br>KELURAHAN FOHABARU</b></h3>
</div>
@php $no=1 @endphp
<table class="table" border="1" width="100%" style="margin: 4px;">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TEMPAT / TANGGAL LAHIR</th>
            <th>AGAMA</th>
            <th>PENDIDIKAN</th>
            <th>PEKERJAAN</th>
            <th>STATUS KAWIN</th>
            <th style="width: 40%">KEWARGANEGARAAN</th>
            <th>KODE POS</th>
        </tr>
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
        </tr>
        @endforeach                         
    </tbody>
</table>


{{-- <script>
     window.print();
</script> --}}
{{-- @endsection --}}