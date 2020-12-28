@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h2 class="m-3">Group Info</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3">Mobile Number <span class="text-danger">*</span></h5>
                <p class="m-3">Only group/project leader's number is needed to contact in case of emergency.</p>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="email" class="form-control"  placeholder="Enter Mobile Number" name="number">
                    </div>
                  </form>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Member-1</h5>
                <h5 class="m-3 mb-4">Name:<span class="ml-2 text-danger">*</span></h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Your Name" name="name">
                    </div>
                  </form>
                <h5 class="m-3 mb-4">Student ID:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Student ID" name="number">
                    </div>
                  </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Member-2</h5>
                <h5 class="m-3 mb-4">Name:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Your Name" name="name">
                    </div>
                  </form>
                <h5 class="m-3 mb-4">Student ID:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Student ID" name="number">
                    </div>
                  </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Member-3</h5>
                <h5 class="m-3 mb-4">Name:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Your Name" name="name">
                    </div>
                  </form>
                <h5 class="m-3 mb-4">Student ID:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Student ID" name="number">
                    </div>
                  </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Member-4</h5>
                <h5 class="m-3 mb-4">Name:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Your Name" name="name">
                    </div>
                  </form>
                <h5 class="m-3 mb-4">Student ID:</h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Student ID" name="number">
                    </div>
                  </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
              <button type="button" class="text-primary btn btn-light pl-3 pr-3">Next</button>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- /.content-header -->
  
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
@endsection