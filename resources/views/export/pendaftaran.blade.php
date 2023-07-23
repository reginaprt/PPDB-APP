<html>
<head>
    <title> Laporan Data Petugas </title>
    <style>
        .text-center h5, h3, h6, h1 {
            margin-top: -25px;
            text-align: center;
        }
        td {
            padding: 1px;
            padding-right: 5px;
        }

    </style>
</head>
<body>
    <div class="text-center">
        <h3 class="m-1 mb-3" >PENERIMAAN SISWA BARU</h3>
        <h1 class="m-1 mb-3" >SEKOLAH DASAR NEGERI SIMPANG 2</h1>
        <h6 class="m-1 mb-3" >Jl. Raya Sindang Barang, Muaracikadu, Kec. Sindangbarang, Kabupaten Cianjur, Jawa Barat 43272</h6>
        <h6 class="m-1 mb-3" >Email : sdn-simmpang2@gmail.com</h6>
    </div>
    <hr>
    <div class="row">
        <div class="column">
            <h4 class="m-1 mb-3" style="text-align: center;" >FORMULIR PENERIMAAN SISWA BARU TAHUN 2023</h4>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>1. No Pendaftaran</td>
                        <td>:</td>
                        <td>{{$pendaftaran->id}}</td>
                    </tr>
                    <tr>
                        <td>2. Nama</td>
                        <td>:</td>
                        <td>{{$pendaftaran->nama}}</td>
                    </tr>
                    <tr>
                        <td>3. Tempat Lahir</td>
                        <td>:</td>
                        <td>{{$pendaftaran->tempat_Lahir}}</td>
                    </tr>
                    <tr>
                        <td>4. Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{$pendaftaran->tanggal_Lahir}}</td>
                    </tr>
                    <tr>
                        <td>5. Agama</td>
                        <td>:</td>
                        <td>{{$pendaftaran->agama}}</td>
                    </tr>
                    <tr>
                        <td>6. Kewarganegaraan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->kewarganegaraan}}</td>
                    </tr>
                {{-- </table>
            </div>
        </div>
        <div class="column">
            <h2 class="m-1 mb-3" >Data Lainnya</h2>
            <div class="table-responsive">
                <table  class="table table-striped"> --}}
                    <tr>
                        <td>7. Berat Badan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->berat_Badan}}</td>
                    </tr>
                    <tr>
                        <td>8. Tinggi Badan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->tinggi_Badan}}</td>
                    </tr>
                    <tr>
                        <td>9. Anak Ke</td>
                        <td>:</td>
                        <td>{{$pendaftaran->anak_Keberapa}}</td>
                    </tr>
                    <tr>
                        <td>10. Kode Pos</td>
                        <td>:</td>
                        <td>{{$pendaftaran->kode_Pos}}</td>
                    </tr>
                    <tr>
                        <td>11. Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>{{$pendaftaran->berkebutuhan_Khusus}}</td>
                    </tr>
                {{-- </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h2 class="m-1 mb-3" >Data Ayah</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped"> --}}
                    <tr><p>Data Ayah</p></tr>
                    <tr>
                        <td>12. Nama</td>
                        <td>:</td>
                        <td>{{$pendaftaran->nama_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>13. NIK</td>
                        <td>:</td>
                        <td>{{$pendaftaran->nik_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>14. Tahun Lahir</td>
                        <td>:</td>
                        <td>{{$pendaftaran->tahunLahir_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>15. Pendidikan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->pendidikan_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>16. Pekerjaan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->pekerjaan_Ayah}}</td>
                    </tr>
                    <tr>
                        <td>17. Penghasilan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->penghasilan_Ayah}}</td>
                    </tr>
                {{-- </table>
            </div>
        </div>
        <div class="column">
            <h2 class="m-1 mb-3" >Data Ibu</h2>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped"> --}}
                    <tr><p>Data Ayah</p></tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$pendaftaran->nama_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>18. NIK</td>
                        <td>:</td>
                        <td>{{$pendaftaran->nik_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>19. Tahun Lahir</td>
                        <td>:</td>
                        <td>{{$pendaftaran->tahunLahir_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>20. Pendidikan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->pendidikan_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>21. Pekerjaan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->pekerjaan_Ibu}}</td>
                    </tr>
                    <tr>
                        <td>22. Penghasilan</td>
                        <td>:</td>
                        <td>{{$pendaftaran->penghasilan_Ibu}}</td>
                    </tr>
                {{-- </table>
            </div>
        </div>
    </div>
    <div class="column">
        <h2 class="m-1 mb-3" >Status</h2>
        <div class="table-responsive">
            <table id="table-data" class="table table-striped"> --}}
            <tr><p>Data Lainnya</p></tr>
                <tr>
                    <td>23. Status</td>
                    <td>:</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>24. Ijazah Terakhir</td>
                    <td>:</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>25. Akta Kelahiran</td>
                    <td>:</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>26. Kartu Keluarga</td>
                    <td>:</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
                <tr>
                    <td>27. KTP</td>
                    <td>:</td>
                    <td>{{$pendaftaran->status}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>