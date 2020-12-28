@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h2 class="m-3">Project Info</h2>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Project Title:<span class="ml-2 text-danger">*</span></h5>
                <form method="" action="" class="m-3">
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Enter Your Project Title" name="name">
                    </div>
                  </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
                <h5 class="m-3 mb-4">Course Code:<span class="ml-2 text-danger">*</span></h5>
                <div class="form-check m-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      CSE-4800
                    </label>
                  </div>
                  <div class="form-check m-3 ">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      CSE-3300
                    </label>
                  </div>
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