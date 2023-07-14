@extends('adminlte::page')

@section('title', 'Kelola Informasi')

@section('content_header')
    <h1 class="m-0 text-dark">Kelola Informasi</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    {{-- Kelola Informasi --}}
                </thead>
            </table>
            <h4 for="exampleFormControlTextarea1" class="form-label">Informasi Pendaftaran</h4>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            <hr>
            <div>
                <div class="" aria-lable="Basic example">
                    <button type="button" id="btn-edit" class="btn btn-success">Edit</button>
                    <button type="button" id="btn-edit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection