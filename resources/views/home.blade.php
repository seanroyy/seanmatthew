@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row">
        <div class="col-lg-3 col-6">
            
        <div class="small-box bg-info">
            <div class="inner">
                <h3>3B<h3>

                <p>BSIT-3B EXAMINERS</p>
</div>
<div class="icon">
    <i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">USER PROFILE<i class="fas fa-arrow-circle">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('About us!') }}
                            </p>
                            <h1> Laravel</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection