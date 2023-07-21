@extends('adminlte::page')

@section('title', 'Pendafratan')

@section('content_header')
    <h1 class="m-0 text-dark">Pendafratan Siswa Baru</h1>
@stop

@section('content')
<?php
$params_id = null;
?>

<div class="container-fluid">
    <div class="card card-default">
        <div class="d-flex">
            <div class="card-body col-md-4">
                @if($jumlahData == 0)
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Daftar
                    </button>
                @endif
                @if($jumlahData == 1)
                <h3 class="m-1 mb-3" >Identitas Siswa</h3>
                <div class="table-responsive">
                    @foreach($ambilData as $pendaftarans)
                    <table id="table-data" class="table table-striped">
                        <tr>
                            <td>No Pendaftaran</td>
                            <td>{{$pendaftarans->id}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{$pendaftarans->nama}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>{{$pendaftarans->tempat_Lahir}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{$pendaftarans->tanggal_Lahir}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{$pendaftarans->agama}}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{$pendaftarans->kewarganegaraan}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
            <div class="card-body col-md-4">
                <h3 class="m-1 mb-3" >Data Lainnya</h3>
                <div class="table-responsive">
                    @foreach($ambilData as $pendaftarans)
                    <table id="table-data" class="table table-striped">
                        <tr>
                            <td>Berat Badan</td>
                            <td>{{$pendaftarans->berat_Badan}}</td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>{{$pendaftarans->tinggi_Badan}}</td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>{{$pendaftarans->anak_Keberapa}}</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>{{$pendaftarans->kode_Pos}}</td>
                        </tr>
                        <tr>
                            <td>Berkebutuhan Khusus</td>
                            <td>{{$pendaftarans->berkebutuhan_Khusus}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="card-body col-md-4">
                <h3 class="m-1 mb-3" >Data Ayah</h3>
                <div class="table-responsive">
                    @foreach($ambilData as $pendaftarans)
                    <table id="table-data" class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>{{$pendaftarans->nama_Ayah}}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>{{$pendaftarans->nik_Ayah}}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lahir</td>
                            <td>{{$pendaftarans->tahunLahir_Ayah}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{$pendaftarans->pendidikan_Ayah}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{$pendaftarans->pekerjaan_Ayah}}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan</td>
                            <td>{{$pendaftarans->penghasilan_Ayah}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
            <div class="card-body col-md-4">
                <h3 class="m-1 mb-3" >Data Ibu</h3>
                <div class="table-responsive">
                    @foreach($ambilData as $pendaftarans)
                    <table id="table-data" class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>{{$pendaftarans->nama_Ibu}}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>{{$pendaftarans->nik_Ibu}}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lahir</td>
                            <td>{{$pendaftarans->tahunLahir_Ibu}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{$pendaftarans->pendidikan_Ibu}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{$pendaftarans->pekerjaan_Ibu}}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan</td>
                            <td>{{$pendaftarans->penghasilan_Ibu}}</td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Data Diri</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                    <form id="pendaftaran" name="pendaftaran" method="post" action="{{ route('pendaftaran') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control" name="users_id" id="users_id" value="{{ $test }}" hidden readonly/>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="id">Nomor Pendaftaran</label>
                                <input type="text" class="form-control" name="id" id="id" readonly/>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tempat_Lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_Lahir" id="tempat_Lahir" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tanggal_Lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_Lahir" id="tanggal_Lahir" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="agama">Agama</label>
                                <select name="agama" class="form-control" id="agama">
                                    <option value=""></option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="budha">Budha</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <option value=""></option>
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kode_Pos">Kode Pos</label>
                                <input type="text" class="form-control" name="kode_Pos" id="kode_Pos" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="berat_Badan">Berat Badan</label>
                                <input type="text" class="form-control" name="berat_Badan" id="berat_Badan" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tinggi_Badan">Tinggi Badan</label>
                                <input type="text" class="form-control" name="tinggi_Badan" id="tinggi_Badan" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="anak_Keberapa">Anak Ke</label>
                                <input type="text" class="form-control" name="anak_Keberapa" id="anak_Keberapa" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <select name="kewarganegaraan" class="form-control" id="kewarganegaraan">
                                    <option value=""></option>
                                    <option value="wni">WNI</option>
                                    <option value="wna">WNA</option>
                                </select>                        </div>
                            <div class="form-group col-md-4">
                                <label for="berkebutuhan_Khusus">Berkebutuhan Khusus</label>
                                <select name="berkebutuhan_Khusus" class="form-control" id="berkebutuhan_Khusus">
                                    <option value=""></option>
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <h5>Data Orang Tua Ayah</h5>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nama_Ayah">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_Ayah" id="nama_Ayah" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nik_Ayah">NIK Ayah</label>
                                <input type="text" class="form-control" name="nik_Ayah" id="nik_Ayah" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tahunLahir_Ayah">Tahun Lahir Ayah</label>
                                <input type="text" class="form-control" name="tahunLahir_Ayah" id="tahunLahir_Ayah" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pendidikan_Ayah">Pendidikan Terakhir Ayah</label>
                                <select name="pendidikan_Ayah" class="form-control" id="pendidikan_Ayah">
                                    <option value=""></option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="slta">SLTA</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pekerjaan_Ayah">Pekerjaan Ayah</label>
                                <select name="pekerjaan_Ayah" class="form-control" id="pekerjaan_Ayah">
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
                            <div class="form-group col-md-4">
                                <label for="penghasilan_Ayah">Penghasilan Ayah</label>
                                <select name="penghasilan_Ayah" class="form-control" id="penghasilan_Ayah">
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
                        <h5>Data Orang Tua Ibu</h5>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nama_Ibu">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_Ibu" id="nama_Ibu" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nik_Ibu">NIK Ibu</label>
                                <input type="text" class="form-control" name="nik_Ibu" id="nik_Ibu" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tahunLahir_Ibu">Tahun Lahir Ibu</label>
                                <input type="text" class="form-control" name="tahunLahir_Ibu" id="tahunLahir_Ibu" required/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pendidikan_Ibu">Pendidikan Terakhir Ibu</label>
                                <select name="pendidikan_Ibu" class="form-control" id="pendidikan_Ibu">
                                    <option value=""></option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="slta">SLTA</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pekerjaan_Ibu">Pekerjaan Ibu</label>
                                <select name="pekerjaan_Ibu" class="form-control" id="pekerjaan_Ibu">
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
                            <div class="form-group col-md-4">
                                <label for="penghasilan_Ibu">Penghasilan Ibu</label>
                                <select name="penghasilan_Ibu" class="form-control" id="penghasilan_Ibu">
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@push('js')
    <script>

        // create
        $("#id").val(Math.floor(1000 + Math.random() * 9000))

        $('#saveBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
                data: $('#pendaftaran').serialize(),
                url: "{{ route('pendaftaran') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    $('#pendaftaran').trigger("reset");
                    $('#pendaftaranModal').modal('hide');
                    table.draw();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
            location.reload();
        });
    </script>
@endpush