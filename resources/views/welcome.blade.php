@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('public/frontend/custom.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @php
        $check_switch = App\SwitchBtn::where('formSwitch','ON')->first();
    @endphp
    <!-- /.content-header -->
  @if ($check_switch != null)
  <section class="content" style="background-color: #DAC5B4">
    <div class="row justify-content-center mt-0">
      @if ($check == null)
      <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <h1>Project Proposal</h1>
            <h5>CSE-4800 and CSE-3300</h5><br>
              <div class="row">
                  <div class="col-md-12 mx-0" >
                      <form id="msform" method="post" enctype="multipart/form-data" action="{{action('ProposalController@store')}}">
                          @csrf
                          <!-- progressbar -->
                          <ul id="progressbar">
                              <li class="active" id="account"><strong>READ CAREFULLY</strong></li>
                              <li id="personal"><strong>Group Info.</strong></li>
                              <li id="payment"><strong>Project Info.</strong></li>
                              <li id="confirm"><strong>Finish</strong></li>
                          </ul> <!-- fieldsets -->
                          <fieldset>
                              <div class="form-card" style="color: black">
                                  <p>*** Complete this form only if you have already registered for CSE-4800  or CSE-3300 for Fall-2020. </p>
                                  <p>*** Your proposal will be successfully submitted after hitting the final 'Submit' button. Before that if you close the form, it will not store the information.</p>
                                  <p>*** After successful submission, you can always (before the deadline) change the information by entering this form again using the same email address.</p>
                                  <p>*** Don't try to submit multiple forms for the same group/person with different email addresses. </p>
                                  <p>*** The ideal group size is 3 members. Although we accept single and four member group, it is highly discouraged. Projects with single and four member groups must be up-to-the minimum standard. </p>
                                  <p>*** If you are not sure about your project idea at this time, no need to worry. Just assemble your team and register for a project with any idea you can come up within the deadline. After you have been assigned to a supervisor, he/she will discuss about the feasibility of your project and modify the idea if needed. If you find a better idea later and your supervisor agrees then you can always change your project afterwords. </p>
                                  <p>***For any further assistance, put a comment on the facebook post regarding this form, and tag Minhazul Haque Riad</p>
                                  <a class="text-important" href="https://drive.google.com/file/d/0B4KIRIBuxRjwdjktOVN6dklvUXM/view?usp=sharing"><h4><b>Demo Proposal Format</b></h4></a>
                                  <p><span class="fs-title text-danger">*Required</span></p>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"><h5>Email address <span class="text-danger fs-title">*</span></h5></label>
                                      <input readonly type="email" value="{{Auth::user()->email}}" required class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                                  </div>
                              </div> 
                              <input type="button" name="next" class="next action-button" value="Next Step" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title">Group Information</h2>
                                  <h5>Mobile Number <span class="text-danger fs-title">*</span></h5>
                                  <p>Only group/project leader's number is needed to contact in case of emergency.</p>
                                  <div class="form-group">
                                      <input required type="text" class="form-control"  placeholder="Enter Mobile Number" name="mobileno">
                                  </div>
                              </div> 
                              <div id="dynamicMember">
                                  <div class="form-card">
                                      <h2 class="fs-title">Member<span class="ml-2 text-danger">*</span></h2>
                                      <div class="form-group">
                                          <input readonly type="text" class="form-control" value="{{Auth::user()->name}}"  placeholder="Enter Member Name" name="studenName[]">
                                      </div>
                                      <h2 class="fs-title">Student ID:<span class="ml-2 text-danger">*</span></h2>
                                      <div class="form-group">
                                        <input readonly type="text" value="{{Auth::user()->studentID}}" class="form-control"  placeholder="Enter Student ID" name="studentID[]">
                                      </div>
                                      <button type="button" class="btn btn-info btn-xs" id="add">ADD ANOTHER MEMBER</button>
                                  </div>    
                              </div> 
                              
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title">Project Information</h2>
                                  <h5>Project Title: <span class="text-danger fs-title">*</span></h5>
                                  <div class="form-group">
                                      <input type="text" class="form-control"  placeholder="Enter Your Project Title" name="projectTitle">
                                    </div>
                                    <h5>Course Code:</h5>
                                    <div class="form-check ">
                                      <input class="form-check-input mt-1" style="width: 20px" value="CSE-3300" type="radio" name="coursecode" id="flexRadioDefault2" @if(Auth::user()->year == 'Third Year') checked @endif>
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        CSE-3300
                                      </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input mt-1" style="width: 20px" value="CSE-4800"  type="radio" name="coursecode" id="flexRadioDefault1" @if(Auth::user()->year == 'Final Year') checked @endif >
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          CSE-4800
                                        </label>
                                      </div>
                              </div> 
                              <div class="form-card">
                                  <h5 class="fs-title"></h5>
                                      <div class="form-group">
                                        <label class="pb-5" for="exampleFormControlFile1" style="color: black">Upload your proposal in pdf fornat. [File name shoule be in the format "project proposal SP-2020 XXXX,XXXX,XXXX,XXXX." Here XXXX will be replaced with student ID of the team members.</label>
                                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                      </div>
                                  
                              </div> 
                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                               <button type="submit" class="action-button" />submit</button
                          </fieldset>
                          {{-- <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title text-center text-success">Success !</h2>
                                  <div class="row justify-content-center">
                                      <div class="col-7 text-center">
                                          <h5>You Have Successfully Suubmitted Project Proposal</h5>
                                      </div>
                                  </div>
                              </div>
                          </fieldset>
                          <fieldset>
                              <div class="form-card">
                                  <h2 class="fs-title text-center">Success !</h2> <br><br>
                                  <div class="row justify-content-center">
                                      <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                  </div> <br><br>
                                  <div class="row justify-content-center">
                                      <div class="col-7 text-center">
                                          <h5>You Have Successfully Signed Up</h5>
                                      </div>
                                  </div>
                              </div>
                          </fieldset> --}}
                      </form>
                  </div>
              </div>
          </div>
      </div>
      @else
      <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-3 mt-3 mb-3">
              <h1 class="text-success">You Already Submitted Your Proposal.</h1>
          </div>
          <a href="{{action('AdminController@view_proposal')}}"><button type="button" class="btn btn-info">View Project Proposal</button></a>
      </div> 
      @endif
  </div>
      <!-- /.container-fluid -->
    </section>
    @else
    @if ($check != null)
    <section class="content" style="background-color: #DAC5B4">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-3 mt-3 mb-3">
                    <h1 class="text-success">You Already Submitted Your Proposal.</h1>
                </div>
                <a href="{{action('AdminController@view_proposal')}}"><button type="button" class="btn btn-info">View Project Proposal</button></a>
            </div> 
        </div>
    </section>
    @endif
  @endif
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
@endsection
@section('script')
<script src="{{asset('public/frontend/custom.js')}}"></script>
<script type="text/javascript">
    var max_value = 4;
    var i = 1;

    $("#add").click(function(){
        
        ++i;
        if(i <= max_value){
            $("#dynamicMember").append('<div class="form-card removable"><h2 class="fs-title">Member</h2><div class="form-group"><input type="text" class="form-control"  placeholder="Enter Member Name" name="studenName[]"></div><h2 class="fs-title">Student ID:</h2><div class="form-group"><input type="text" class="form-control"  placeholder="Enter Student ID" name="studentID[]"></div><button type="button" class="btn btn-danger btn-xs remove-div" id="add">Remove</button></div>');
        }

    });

    $(document).on('click', '.remove-div', function(){
        
        $(this).parents('.removable').remove();
    });

</script>
@endsection