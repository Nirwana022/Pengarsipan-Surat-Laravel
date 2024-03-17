
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
@foreach ($lahir as $result)
@endforeach
    <div class="header">
        <h3><b>PEMERINTAH KOTA TIDORE KEPULAUAN<br>KECAMATAN TIDORE UTAMA<br>KELURAHAN FOHABARU</b></h3>
        <p><u><b>SURAT PENGANTAR KELAHIRAN</b></u></p>
        <p>Nomor: {{ $result->no_surat }}</p>
    </div>
    
    <div class="content">
        <p>Yang bertanda tangan di bawah ini Kepala Desa Fohabaru, dengan ini menerangkan dengan</p>
        <p>sesungguhnya bahwa :</p>
        <table>
            <tr>
                <td>Pada Tanggal</td>
                <td>:</td>
                <td>{{ $result->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Telah lahir seorang bayi</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Bayi</td>
                <td>:</td>
                <td>{{ $result->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $result->jenis_kelamin }}</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>Dari pasangan suami istri</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td>{{ $result->nama_ibu }}</td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td>{{ $result->nama_ayah }}</td>
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
