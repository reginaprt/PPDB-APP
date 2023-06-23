@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <!-- Apply any bg-* class to to the info-box to color it -->
                            <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                                <div class="info-box-content">
                                <span class="info-box-text">Likes</span>
                                <span class="info-box-number">41,410</span>
                                <!-- The progress section is optional -->
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    70% Increase in 30 Days
                                </span>
                                </div><!-- /.info-box-content -->
                            </div><!-- /.info-box -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-0" style>You are logged in!</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@stop
