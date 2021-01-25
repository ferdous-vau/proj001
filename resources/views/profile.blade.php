@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 mt-3">
    
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{asset('public/frontend')}}/dist/img/user2-160x160.jpg"
                         alt="User profile picture">
                  </div>
    
                  <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
    
                  <p class="text-muted text-center">{{Auth::user()->userType}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
    
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-envelope-open"></i> Email</strong>
    
                  <p class="text-muted">
                    {{Auth::user()->email}}
                  </p>
    
                  <hr>
    
                  <strong><i class="fas fa-phone mr-1"></i> Contact Information</strong>
    
                  <p class="text-muted">{{Auth::user()->contactNO}}</p>
    
                  <hr>
    
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Student ID</strong>
    
                  <p class="text-muted">{{Auth::user()->studentID}}
                  </p>
    
                  <hr>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-9 mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-secondary btn-sm" id="showForm">Update Profile</button>
                    </div>
                    <div class="col-md-8 ">
                        <form id="updateForm">
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <div class="card-body m-0">
                              <div class="form-group">
                                <label for="" class="mt-2">Name</label>
                                <input readonly value="{{Auth::user()->name}}" type="text" name="" class="form-control ">
                                <label for="" class="mt-2">Email</label>
                                <input readonly value="{{Auth::user()->email}}" type="email" name="" class="form-control" id="" placeholder="Enter Mobile Mumber">
                                <label for="" class="mt-2">Mobile Number</label>
                                <input value="{{Auth::user()->mobileno}}" type="text" name="" class="form-control" id="" placeholder="Enter Mobile Mumber">
                                <label for="" class="mt-2">Student ID</label>
                                <input value="{{Auth::user()->studentID }}" type="text" name="" class="form-control" id="" placeholder="Enter Mobile Mumber">
                                <label for="" class="mt-2">Mobile Number</label>
                                <input type="file" class="form-control-file p-1" name="" id="exampleFormControlFile1" style="border: #ced2d6 solid 1px;border-radius: 5px;">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
</div>

@endsection
@section('script')
    <script>
        $('#updateForm').hide();

        $('#showForm').click(function(e){
            e.preventDefault();
            $('#updateForm').show();
        });
    </script>
@endsection