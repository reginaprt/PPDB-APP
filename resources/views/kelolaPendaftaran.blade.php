@extends('adminlte::page')

@section('title', 'Kelola Pendafratan')

@section('content_header')
    <h1 class="m-0 text-dark">Kelola Pendaftaran</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    {{-- Kelola Pendaftaran --}}
                </thead>
            </table>

            <h3>Pendaftaran Siswa Baru SDN Simpang 2</h3>
            <table class="table table-striped table-bordered text-center justify-content-center">
                <thead>
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($kelolaPendaftaran as $pendaftarans)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$pendaftarans->id}}</td>
                            <td>{{$pendaftarans->nama}}</td>
                            <td>{{$pendaftarans->tanggal_Lahir}}</td>
                            <td>{{$pendaftarans->agama}}</td>
                            <td>{{$pendaftarans->jenis_Kelamin}}</td>
                            <td>{{$pendaftarans->alamat}}</td>
                            <td>
                                <a href="">Verifikasi</a>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-lable="Basic example">
                                    <button type="button" id="btn-edit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-id="{{ $pendaftarans->id }}">Edit</button>
                                    <a type="btn btn-sm btn-danger btn-rounded" href="/admin/kelolaPendaftaran/delete/{{$pendaftarans->id}}">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form method="post" action="{{ route('editPendaftaran') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h5>Data Diri</h5>
                <div class="form-group">
                    <label for="id">Nomor Pendaftaran</label>
                    <input type="text" class="form-control" name="id" id="edit-id" readonly/>
                </div>
                <div class="form-group">
                    <label for="edit-nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="edit-nama" required/>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-tempat_Lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_Lahir" id="edit-tempat_Lahir" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-tanggal_Lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_Lahir" id="edit-tanggal_Lahir" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-agama">Agama</label>
                        <select name="agama" class="form-control" id="edit-agama">
                            <option value=""></option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="konghucu">Konghucu</option>
                        </select>                            
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="edit-jenis_kelamin">
                            <option value=""></option>
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>                                            
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="edit-alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="edit-alamat" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edit-kode_Pos">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_Pos" id="edit-kode_Pos" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="edit-berat_Badan">Berat Badan</label>
                        <input type="text" class="form-control" name="berat_Badan" id="edit-berat_Badan" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edit-tinggi_Badan">Tinggi Badan</label>
                        <input type="text" class="form-control" name="tinggi_Badan" id="edit-tinggi_Badan" required/>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edit-anak_Keberapa">Anak Ke</label>
                        <input type="text" class="form-control" name="anak_Keberapa" id="edit-anak_Keberapa" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-kewarganegaraan">Kewarganegaraan</label>
                        <select name="kewarganegaraan" class="form-control" id="edit-kewarganegaraan">
                            <option value=""></option>
                            <option value="wni">WNI</option>
                            <option value="wna">WNA</option>
                        </select>                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-berkebutuhan_Khusus">Berkebutuhan Khusus</label>
                        <select name="berkebutuhan_Khusus" class="form-control" id="edit-berkebutuhan_Khusus">
                            <option value=""></option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>                        
                    </div>
                </div>
                <br>

                <h5>Data Orang Tua</h5>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-nama_Ayah">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_Ayah" id="edit-nama_Ayah" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-nama_Ibu">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_Ibu" id="edit-nama_Ibu" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-nik_Ayah">NIK Ayah</label>
                        <input type="text" class="form-control" name="nik_Ayah" id="edit-nik_Ayah" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-nik_Ibu">NIK Ibu</label>
                        <input type="text" class="form-control" name="nik_Ibu" id="edit-nik_Ibu" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-tahunLahir_Ayah">Tahun Lahir Ayah</label>
                        <input type="text" class="form-control" name="tahunLahir_Ayah" id="edit-tahunLahir_Ayah" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-tahunLahir_Ibu">Tahun Lahir Ibu</label>
                        <input type="text" class="form-control" name="tahunLahir_Ibu" id="edit-tahunLahir_Ibu" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-pendidikan_Ayah">Pendidikan Terakhir Ayah</label>
                        <select name="pendidikan_Ayah" class="form-control" id="edit-pendidikan_Ayah">
                            <option value=""></option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="slta">SLTA</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>                             
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-pendidikan_Ibu">Pendidikan Terakhir Ibu</label>
                        <select name="pendidikan_Ibu" class="form-control" id="edit-pendidikan_Ibu">
                            <option value=""></option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="slta">SLTA</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>                             
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-pekerjaan_Ayah">Pekerjaan Ayah</label>
                        <select name="pekerjaan_Ayah" class="form-control" id="edit-pekerjaan_Ayah">
                            <option value=""></option>
                            <option value="tidak_bekerja">Tidak Bekerja</option>
                            <option value="buruh">Buruh</option>
                            <option value="nelayan">Nelayan</option>
                            <option value="pedagang">Pedagang</option>
                            <option value="petani">Petani</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="wirausaha">Wirausaha</option>
                            <option value="pns/tni/porli">PNS/TNI/Porli</option>
                            <option value="pensiunan">Pensiunan</option>
                        </select>                            
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-pekerjaan_Ibu">Pekerjaan Ibu</label>
                        <select name="pekerjaan_Ibu" class="form-control" id="edit-pekerjaan_Ibu">
                            <option value=""></option>
                            <option value="tidak_bekerja">Tidak Bekerja</option>
                            <option value="buruh">Buruh</option>
                            <option value="nelayan">Nelayan</option>
                            <option value="pedagang">Pedagang</option>
                            <option value="petani">Petani</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="wirausaha">Wirausaha</option>
                            <option value="pns/tni/porli">PNS/TNI/Porli</option>
                            <option value="pensiunan">Pensiunan</option>
                        </select>                             
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="edit-penghasilan_Ayah">Penghasilan Ayah</label>
                        <select name="penghasilan_Ayah" class="form-control" id="edit-penghasilan_Ayah">
                            <option value=""></option>
                            <option value="0 - 1.000.000">0 - 1.000.000</option>
                            <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                            <option value=".000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                            <option value=".000.000 - 4.000.000">3.000.000 - 4.000.000</option>
                            <option value="4.000.000 - 5.000.000">4.000.000 - 5.000.000</option>
                            <option value="Diatas 5.000.000">Diatas 5.000.000</option>
                        </select>                             
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edit-penghasilan_Ibu">Penghasilan Ibu</label>
                        <select name="penghasilan_Ibu" class="form-control" id="edit-penghasilan_Ibu">
                            <option value=""></option>
                            <option value="0 - 1.000.000">0 - 1.000.000</option>
                            <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                            <option value=".000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                            <option value=".000.000 - 4.000.000">3.000.000 - 4.000.000</option>
                            <option value="4.000.000 - 5.000.000">4.000.000 - 5.000.000</option>
                            <option value="Diatas 5.000.000">Diatas 5.000.000</option>
                        </select>                             
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection

@section('js')
    <script>
        $(function() {
            $(document).on('click', '#btn-edit', function(){
                let id = $(this).data('id');

                $.ajax({
                    type: "get",
                    url: "{{url('/admin/ajaxadmin/dataPendaftar')}}/"+id,
                    dataType: 'json',
                    success: function(res){
                        $('#edit-id').val(res.id);
                        $('#edit-nama').val(res.nama);
                        $('#edit-tempat_Lahir').val(res.tempat_Lahir);
                        $('#edit-tanggal_Lahir').val(res.tanggal_Lahir);
                        $('#edit-agama').val(res.agama);
                        $('#edit-jenis_kelamin').val(res.jenis_Kelamin);
                        $('#edit-alamat').val(res.alamat);
                        $('#edit-kode_Pos').val(res.kode_Pos);
                        $('#edit-berat_Badan').val(res.berat_Badan);
                        $('#edit-tinggi_Badan').val(res.tinggi_Badan);
                        $('#edit-anak_Keberapa').val(res.anak_Keberapa);
                        $('#edit-kewarganegaraan').val(res.kewarganegaraan);
                        $('#edit-berkebutuhan_Khusus').val(res.berkebutuhan_Khusus);

                        $('#edit-nama_Ayah').val(res.nama_Ayah);
                        $('#edit-nama_Ibu').val(res.nama_Ibu);
                        $('#edit-nik_Ayah').val(res.nik_Ayah);
                        $('#edit-nik_Ibu').val(res.nik_Ibu);
                        $('#edit-tahunLahir_Ayah').val(res.tahunLahir_Ayah);
                        $('#edit-tahunLahir_Ibu').val(res.tahunLahir_Ibu);
                        $('#edit-pendidikan_Ayah').val(res.pendidikan_Ayah);
                        $('#edit-pendidikan_Ibu').val(res.pendidikan_Ibu);
                        $('#edit-pekerjaan_Ayah').val(res.pekerjaan_Ayah);
                        $('#edit-pekerjaan_Ibu').val(res.pekerjaan_Ibu);
                        $('#edit-penghasilan_Ayah').val(res.penghasilan_Ayah);
                        $('#edit-penghasilan_Ibu').val(res.penghasilan_Ibu);
                    },
                });
            });
        });
        </script>

        <script>
        function deleteConfirmation(id){
            swal.fire({
                title: "Hapus?",
                type: 'warning',
                text: "Apakah anda yakin akan menghapus data pendaftar?" +id+"?!",
                showCancelButton: !0,
                confirmButtonText: "Ya, Lakukan",
                cancelButtonText: "Tidak, Batalkan",
                reverseButtons: !0
            }).then(function (e){
                if(e.value === true){
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: 'POST',
                        url: "pendaftaran/delete/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function(results){
                            if(results.success === true){
                                swal.fire("Done!", results.message, "success"):

                                setTimeout(function(){
                                    location.reload();
                                },1000);
                            } else {
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }, function (dismiss) {
                    return false;
                }
            })
        }
    </script>
@stop