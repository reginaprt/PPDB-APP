@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
    <h1 class="m-0 text-dark">Laporan</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Pendaftaran Siswa Baru SDN Simpang 2</h3>
                <div class="d-flex m-1">
                    <a type="button" class="btn btn-success m-1" href="/laporan/export/excel">Export Excel</a>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle m-1" type="button" data-toggle="dropdown" aria-expanded="false">
                            Export PDF
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/laporan/export/lulus">Lulus</a>
                            <a class="dropdown-item" href="/laporan/export/tdklulus">Tidak Lulus</a>
                            <a class="dropdown-item" href="/laporan/export/all">Semua Data</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <table class="table table-striped text-center justify-content-center">
                <thead>
                    <th>No</th>
                    <th>No. Pendaftaran</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($Laporan as $laporans)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$laporans->id_pendaftaran}}</td>
                            <td>{{$laporans->nama}}</td>
                            <td>{{$laporans->tanggal_Lahir}}</td>
                            <td>{{$laporans->agama}}</td>
                            <td>{{$laporans->jenis_Kelamin}}</td>
                            <td>{{$laporans->alamat}}</td>
                            <td>
                                @if ($laporans->status == 'Diproses')
                                    <a class="btn btn-warning">{{$laporans->status}}</a>
                                @endif
                                @if ($laporans->status == 'Lulus')
                                    <a class="btn btn-success">{{$laporans->status}}</a>
                                @endif
                                @if ($laporans->status == 'Tidak Lulus')
                                    <a class="btn btn-danger">{{$laporans->status}}</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection