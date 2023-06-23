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
                    <th>No Pendaftaran</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($kelolaPendaftaran as $pendaftarans)
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$pendaftarans->nama}}</td>
                            <td>{{$pendaftarans->tanggal_Lahir}}</td>
                            <td>{{$pendaftarans->agama}}</td>
                            <td>{{$pendaftarans->jenis_Kelamin}}</td>
                            <td>{{$pendaftarans->alamat}}</td>
                            <td>{{$pendaftarans->nama_Ayah}}</td>
                            <td>{{$pendaftarans->pekerjaan_Ayah}}</td>
                            <td>{{$pendaftarans->nama_Ibu}}</td>
                            <td>{{$pendaftarans->pekerjaan_Ibu}}</td>
                            <td>
                                <a href="">Verivikasi</a>
                                <!-- <br>
                                    <a href="">lulus</a>
                                    <a href="">tidak lulus</a> -->
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-lable="Basic example">
                                    <button type="button" id="btn-edit" class="btn btn-success">Edit</button>
                                    <button type="button" id="btn-edit" class="btn btn-danger">Hapus</button>
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

@endsection

@push('js')
    <script>
        
        // create
        $(function() {})

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