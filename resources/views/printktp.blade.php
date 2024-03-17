<?php
use App\Models\suratktpModel;
use App\Models\dapenModel;

$no_surat = request('no_surat');
$nik = request('nik');

$result = suratktpModel::join('tb_dapen', 'tb_suratktp.nik', '=', 'tb_dapen.nik')
    ->where('tb_suratktp.no_surat', $no_surat)
    ->first();

if ($result) {
    $nik = $result->nik;
    $nama = $result->nama;
    $tempat_lahir = $result->tempat_lahir;
    $tgl_lahir = $result->tgl_lahir;
    $agama = $result->agama;
    $pekerjaan = $result->pekerjaan;
    $tgl_surat = $result->tgl_surat;
} else {
    // Handle jika data tidak ditemukan
    // Contoh:
    // abort(404, 'Data tidak ditemukan');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Surat</title>
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
</head>
<body>
    <div class="header">
        <h3><b>PEMERINTAH KOTA TIDORE KEPULAUAN<br>KECAMATAN TIDORE UTAMA<br>KELURAHAN FOHABARU</b></h3>
        <p><u><b>SURAT PENGANTAR KTP/e-KTP</b></u></p>
        <p>Nomor: {{ $no_surat }}</p>
    </div>
    
    <div class="content">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Fohabaru, dengan ini menerangkan dengan</p>
        <p>sesungguhnya bahwa :</p>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $nik }}</td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <td>TEMPAT/TANGGAL LAHIR</td>
                <td>:</td>
                <td>{{ $tempat_lahir }}/{{ $tgl_lahir }}</td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>{{ $agama }}</td>
            </tr>
            <tr>
                <td>PEKERJAAN</td>
                <td>:</td>
                <td>{{ $pekerjaan }}</td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td>:</td>
                <td>TIDORE UTARA</td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td>:</td>
                <td>TIDORE KEPULAUAN</td>
            </tr>
        </table>
        <br>
        <p>Benar nama tersebut adalah warga Desa Fohabaru Kecamatan Tidore Utara Kota Tidore</p>
        <p>Kepulauan dan selanjutnya diberikan sebagai pengantar untuk mendapatkan e-KTP.</p>
        <br>
        <p>Demikian surat pengantar ini dibuat dan diberikan kepada yang bersangkutan untuk</p>
        <p>dipergunakan sebagaimana mestinya.</p>
    </div>
    <div class="container">
        <div class="content1">
            <p>Fohabaru, {{ $tgl_surat }}</p>
            <p>Kepala Kelurahan Fohabaru</p>
            <br><br>
            <p><u>Ashri Suleman. S.IP</u></p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
