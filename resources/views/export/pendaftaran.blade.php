<html>
<head>
    <title> Laporan Data Petugas </title>
    <style>
        .text-center h5, h3, h6 {
            margin-top: -10px;
            text-align: center;
        }
        #table-data td{
            border: 1px solid #000000;
            padding: 8px;
        }
        * {
        box-sizing: border-box;
        }

        .row {
        margin-left:-5px;
        margin-right:-5px;
        }

        .column {
        float: left;
        width: 50%;
        padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
        content: "";
        clear: both;
        display: table;
        }

        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }

        th, td {
        text-align: left;
        padding: 16px;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <div class="text-center">
        <h5 class="m-1 mb-3" >KARTU PERSERNA</h5>
        <h3 class="m-1 mb-3" >PENERIMAAN SISWA BARU</h3>
        <h3 class="m-1 mb-3" >SEKOLAH DASAR NEGERI SIMPANG 2</h3>
        <h6 class="m-1 mb-3" >Jl. Raya Sindang Barang, Muaracikadu, Kec. Sindangbarang, Kabupaten Cianjur, Jawa Barat 43272</h6>
    </div>
    <hr>
    <div class="row">
        <div class="column">
            <h2 class="m-1 mb-3" >Identitas Siswa</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>No Pendaftaran</td>
                        <td>{{$pendaftaran->id}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{$pendaftaran->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>{{$pendaftaran->tempat_Lahir}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>{{$pendaftaran->tanggal_Lahir}}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>{{$pendaftaran->agama}}</td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>{{$pendaftaran->kewarganegaraan}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="column">
            <h2 class="m-1 mb-3" >Data Lainnya</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>Berat Badan</td>
                        <td>{{$pendaftaran->berat_Badan}}</td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>{{$pendaftaran->tinggi_Badan}}</td>
                    </tr>
                    <tr>
                        <td>Anak Ke</td>
                        <td>{{$pendaftaran->anak_Keberapa}}</td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>{{$pendaftaran->kode_Pos}}</td>
                    </tr>
                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>{{$pendaftaran->berkebutuhan_Khusus}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h2 class="m-1 mb-3" >Data Ayah</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>{{$pendaftaran->nama_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>{{$pendaftaran->nik_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>{{$pendaftaran->tahunLahir_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>{{$pendaftaran->pendidikan_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>{{$pendaftaran->pekerjaan_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>{{$pendaftaran->penghasilan_Ayah}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="column">
            <h2 class="m-1 mb-3" >Data Ibu</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>{{$pendaftaran->nama_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>{{$pendaftaran->nik_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>{{$pendaftaran->tahunLahir_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>{{$pendaftaran->pendidikan_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>{{$pendaftaran->pekerjaan_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td>{{$pendaftaran->penghasilan_Ibu}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="column">
        <h2 class="m-1 mb-3" >Status</h2>
        <div class="table-responsive">
            <table id="table-data" class="table table-striped">
                <tr>
                    <td>Status</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>Ijazah Terakhir</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>Akta Kelahiran</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>Kartu Keluarga</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>KTP</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>