<html>
<head>
     <title> Laporan Data Petugas </title>
</head>
<body>
     <div class="d-flex">
          <div class="card-body col-md-6">
              <h3 class="m-1 mb-3" >Identitas Siswa</h3>
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
          <div class="card-body col-md-6">
              <h3 class="m-1 mb-3" >Data Lainnya</h3>
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

      <div class="d-flex">
          <div class="card-body col-md-6">
              <h3 class="m-1 mb-3" >Data Ayah</h3>
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
          <div class="card-body col-md-6">
              <h3 class="m-1 mb-3" >Data Ibu</h3>
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
          <div class="card-body col-md-6">
            <h3 class="m-1 mb-3" >Status</h3>
            <div class="table-responsive">
                <table id="table-data" class="table table-striped">
                    <tr>
                        <td>{{$pendaftaran->status}}</td>
                    </tr>
                </table>
            </div>
        </div>
      </div>
</body>
</html>