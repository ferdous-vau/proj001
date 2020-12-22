@extends('master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 m-5 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Update Supervisor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{action('Admin\SupervisorController@update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$supervisor->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText1">Supervisor Name</label>
                    <input value="{{$supervisor->name}}" type="text" class="form-control" id="exampleInputText1" placeholder="Enter Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input value="{{$supervisor->email}}" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                  </div>
                </div>
                <!-- /.card-body -->
          
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          
            
          
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-header -->

  <!-- Main content -->
  
  <!-- /.content -->
</div>
    
@endsection
