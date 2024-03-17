
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
@foreach ($mati as $result)
@endforeach
    <div class="header">
        <h3><b>PEMERINTAH KOTA TIDORE KEPULAUAN<br>KECAMATAN TIDORE UTAMA<br>KELURAHAN FOHABARU</b></h3>
        <p><u><b>SURAT PENGANTAR KEMATIAN</b></u></p>
        <p>Nomor: {{ $result->no_surat }}</p>
    </div>
    
    <div class="content">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Fohabaru, dengan ini menerangkan dengan</p>
        <p>sesungguhnya bahwa :</p>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $result->nik }}</td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>{{ $result->nama }}</td>
            </tr>
            <tr>
                <td>TEMPAT/TANGGAL LAHIR</td>
                <td>:</td>
                <td>{{ $result->tempat_lahir }}/{{ $result->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>{{ $result->agama }}</td>
            </tr>
            <tr>
                <td>PEKERJAAN</td>
                <td>:</td>
                <td>{{ $result->pekerjaan }}</td>
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
        <p>Telah Meninggal pada:</p>
        <table>
            <tr>
                <td>TANGGAL KEMATIAN</td>
                <td>:</td>
                <td>{{ $result->tgl_kematian }}</td>
            </tr>
        </table>
        <br>
        <p>Demikian surat pengantar ini dibuat dan diberikan kepada yang bersangkutan untuk</p>
        <p>dipergunakan sebagaimana mestinya.</p>
    </div>
    <div class="container">
        <div class="content1">
            <p>Fohabaru, {{ $result->tgl_surat }}</p>
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
