@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h4>Selamat Datang di Sekolah Dasar Negeri Simpang 2</h4><br>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptatem ea sequi quibusdam voluptatum, in vel libero nemo animi repudiandae, id fugiat dolore quidem, dicta culpa cumque atque itaque voluptate.</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, corporis animi, voluptate molestiae dolorum sit praesentium hic nesciunt explicabo adipisci minus quibusdam fugit quod sequi deserunt ab debitis repudiandae dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorem omnis cumque soluta cum libero iusto repudiandae architecto sed exercitationem? Dolor fuga beatae, atque dolorum laudantium perspiciatis odit praesentium veritatis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-0" style>Waktu Pendaftaran</h4>
                            <br>
                            <table>
                                <tr>
                                    <td>Dibuka</td>
                                </tr>
                                <tr>
                                    <td>11 Juni 2023 s/d 11 July 2023</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-0" style>Status</h4>
                            <br>
                            @if($status1 != null )
                                @foreach($status as $pendaftarans)
                                    @if ($pendaftarans->status == 'Diproses')
                                        <p class="btn btn-warning mt-2" style="margin-bottom: 5px">{{$pendaftarans->status}}</p>
                                    @endif
                                    @if ($pendaftarans->status == 'Lulus')
                                        <p class="btn btn-success mt-2" style="margin-bottom: 5px">{{$pendaftarans->status}}</p>
                                    @endif
                                    @if ($pendaftarans->status == 'Tidak Lulus')
                                        <p class="btn btn-danger mt-2" style="margin-bottom: 5px">{{$pendaftarans->status}}</p>
                                    @endif
                                @endforeach
                            @endif
                            @if($status1 == null )
                                <p class="btn btn-info mt-2" style="margin-bottom: 5px">Anda Belum Mendaftar</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-0" style>Hubungi</h4>
                            <br>
                            <table>
                                <tr>
                                    <td>WhatsApp</td>
                                    <td>:</td>
                                    <td>08234234243</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>sdnsimpang2@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
