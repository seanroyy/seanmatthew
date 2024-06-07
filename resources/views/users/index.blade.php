@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        BSIT 3B 
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Middle Name</label>
                   
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
              
                </div>
                <!-- /.card-body -->

           
              </form>
@endsection