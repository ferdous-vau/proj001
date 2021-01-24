@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9 m-1 mx-auto rounded" style="background-color: #DAC5B4">
                <img src="{{asset('public/frontend')}}/dist/img/form-banner.jpg" class="img-fluid " alt="Responsive image">
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
              <h1>Project Proposal</h1>
              <h5>CSE-4800 and CSE-3300</h5><br>
              <h6>READ CAREFULLY:</h6><br>
              <p>*** Complete this form only if you have already registered for CSE-4800  or CSE-3300 for Fall-2020. </p>
              <p>*** Your proposal will be successfully submitted after hitting the final 'Submit' button. Before that if you close the form, it will not store the information.</p>
              <p>*** After successful submission, you can always (before the deadline) change the information by entering this form again using the same email address.</p>
              <p>*** Don't try to submit multiple forms for the same group/person with different email addresses. </p>
              <p>*** The ideal group size is 3 members. Although we accept single and four member group, it is highly discouraged. Projects with single and four member groups must be up-to-the minimum standard. </p>
              <p>*** If you are not sure about your project idea at this time, no need to worry. Just assemble your team and register for a project with any idea you can come up within the deadline. After you have been assigned to a supervisor, he/she will discuss about the feasibility of your project and modify the idea if needed. If you find a better idea later and your supervisor agrees then you can always change your project afterwords. </p>
              <p>***For any further assistance, put a comment on the facebook post regarding this form, and tag Minhazul Haque Riad</p>
              <a class="text-important" href="https://drive.google.com/file/d/0B4KIRIBuxRjwdjktOVN6dklvUXM/view?usp=sharing"><h4><b>Demo Proposal Format</b></h4></a>
              <p class="text-danger">*Required</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
              <form method="" action="">
                <div class="form-group">
                  <label for="exampleInputEmail1"><h5>Email address <span class="text-danger">*</span></h5></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 m-3 p-3 mx-auto rounded" style="background-color: #DAC5B4">
              <h5><span class="text-danger">*</span></h5> 
              <div class="custom-control custom-checkbox checkbox-lg">
                <input type="checkbox" class="custom-control-input" id="checkbox-2" checked="">
                <label class="custom-control-label" for="checkbox-2">I have read and understand all the instructions above.</label>
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