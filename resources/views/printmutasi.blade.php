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
    @foreach($mutasi as $row)
    @endforeach
    <div class="header">
        <h3><b>PEMERINTAH KOTA TIDORE KEPULAUAN<br>KECAMATAN TIDORE UTAMA<br>KELURAHAN FOHABARU</b></h3>
        <p><u><b>SURAT KETERANGAN PINDAH PENDUDUK</b></u></p>
        <p>Nomor: {{ $row->no_surat }}</p>
    </div>
    
    <div class="content">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Fohabaru, dengan ini menerangkan dengan</p>
        <p>sesungguhnya bahwa :</p>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $row->nik }}</td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>{{ $row->nama }}</td>
            </tr>
            <tr>
                <td>TEMPAT/TANGGAL LAHIR</td>
                <td>:</td>
                <td>{{ $row->tempat_lahir }}/{{ $row->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>{{ $row->agama }}</td>
            </tr>
            <tr>
                <td>PEKERJAAN</td>
                <td>:</td>
                <td>{{ $row->pekerjaan }}</td>
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
        <p>Kepulauan dan selanjutnya atas permintaan sendiri diberikan Surat Keterangan Pindah dengan alasan ikut keluarga.</p>
        <br>
        <p>Demikian surat pengantar ini dibuat dan diberikan kepada yang bersangkutan untuk</p>
        <p>dipergunakan sebagaimana mestinya.</p>
    </div>
    <div class="container">
        <div class="content1">
            <p>Fohabaru, {{ $row->tgl_surat }}</p>
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
