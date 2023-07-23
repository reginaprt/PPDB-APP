<html>
<head>
     <title> Laporan Data Pengajuan </title>
     <style>
          #user {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          }

          #user td, #user th {
          border: 1px solid #ddd;
          padding: 8px;
          font-size: 12px;
          }

          #user tr:nth-child(even){background-color: #f2f2f2;}

          #user tr:hover {background-color: #ddd;}

          #user th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #000661;
          color: white;
          }
     </style>
</head>
<body>
     <h1>Laporan Data Pengajuan Penarikan Tabungan</h1>

     <table id="user">
          <thead>
               <tr class="text-center">
                    <td>No</td>
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Tepat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>JK</td>
                    <td>Alamat</td>
                    <td>Kode Pos</td>
                    <td>Agama</td>
                    <td>Tinggi</td>
                    <td>Berat</td>
                    <td>Kewarganegaraan</td>
                    <td>Khusus</td>
                    <td>Anak Ke</td>
                    <td>Nama Ayah</td>
                    <td>NIK Ayah</td>
                    <td>Tanggal Lahir Ayah</td>
                    <td>Pendidikan Ayah</td>
                    <td>Pekerjaan Ayah</td>
                    <td>Pengahasilan Ayah</td>
                    <td>Nama Ibu</td>
                    <td>NIK Ibu</td>
                    <td>Tanggal Lahir Ibu</td>
                    <td>Pendidikan Ibu</td>
                    <td>Pekerjaan Ibu</td>
                    <td>Penghasilan Ibu</td>
                    <td>Status</td>
                    <td>Ijazah</td>
                    <td>Akta</td>
                    <td>KK</td>
                    <td>Paspoto</td>
                    <td>Dibuat</td>
               </tr>
          </thead>
          <tbody>
               @foreach($laporan as $laporans)
                    <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{$laporans->id_pendaftaran}}</td>
                         <td>{{$laporans->nama}}</td>
                         <td>{{$laporans->tempat_Lahir}}</td>
                         <td>{{$laporans->tanggal_Lahir}}</td>
                         <td>{{$laporans->jenis_Kelamin}}</td>
                         <td>{{$laporans->alamat}}</td>
                         <td>{{$laporans->kode_Pos}}</td>
                         <td>{{$laporans->agama}}</td>
                         <td>{{$laporans->tinggi_Badan}}</td>
                         <td>{{$laporans->berat_Badan}}</td>
                         <td>{{$laporans->kewarganegaraan}}</td>
                         <td>{{$laporans->berkebutuhan_Khusus}}</td>
                         <td>{{$laporans->anak_Keberapa}}</td>
                         <td>{{$laporans->nama_Ayah}}</td>
                         <td>{{$laporans->nik_Ayah}}</td>
                         <td>{{$laporans->tahunLahir_Ayah}}</td>
                         <td>{{$laporans->pendidikan_Ayah}}</td>
                         <td>{{$laporans->pekerjaan_Ayah}}</td>
                         <td>{{$laporans->penghasilan_Ayah}}</td>
                         <td>{{$laporans->nama_Ibu}}</td>
                         <td>{{$laporans->nik_Ibu}}</td>
                         <td>{{$laporans->tahunLahir_Ibu}}</td>
                         <td>{{$laporans->pendidikan_Ibu}}</td>
                         <td>{{$laporans->pekerjaan_Ibu}}</td>
                         <td>{{$laporans->penghasilan_Ibu}}</td>
                         <td>{{$laporans->status}}</td>
                         <td>
                              @if($laporans->ijazah !== null)
                                   [Ada]
                              @else
                                   [Tidak Ada]
                              @endif
                         </td>
                         <td>
                              @if($laporans->akta !== null)
                                   [Ada]
                              @else
                                   [Tidak Ada]
                              @endif
                         </td>
                         <td>
                              @if($laporans->kk !== null)
                                   [Ada]
                              @else
                                   [Tidak Ada]
                              @endif
                         </td>
                         <td>
                              @if($laporans->paspoto !== null)
                                   [Ada]
                              @else
                                   [Tidak Ada]
                              @endif
                         </td>
                         <td>{{$laporans->created_at}}</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>