@extends('master')
@section('style')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Project Detail</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>



      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Projects Detail</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted"><h4 class="mb-0">Supervisor &nbsp; <i class="fas fa-user-tie">
                        </i></h4></span>
                        <span class="info-box-number text-center text-muted mb-1">
                        @if ($proposal->supervisor == null)
                        Not Assigned
                        @else 
                        {{$proposal->supa->name}}
                        @endif
                      </span>
                         <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#assignSupervisor" href="#">
                            <i class="fas fa-user-tie mr-2">
                            </i>
                            Assign
                           </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-center text-muted"><h4 class="mb-0">Schedule &nbsp; <i class="fas fa-calendar-alt">
                            </i></h4></span>
                            <span class="info-box-number text-center text-muted mb-1">
                              @if ($proposal->schedule == null)
                              Not Assigned
                              @else 
                              {{date("d M Y g:i a", strtotime($proposal->schedule))}}
                              @endif
                            </span>
                             <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#assignDate">
                                <i class="fas fa-calendar-alt mr-2">
                                </i>
                                Assign
                               </button>
                          </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <iframe src="{{asset('public/uploads/proposals/'.$proposal->file)}}" width="100%" height="650px">
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-primary"><i class="fas fa-clipboard"></i> {{$proposal->projectTitle}} </h3>
                <br>
                <div class="text-muted">
                  <h3>Group Members</h3>
                  @foreach (json_decode($proposal->members) as $key => $item)
                  <h5 class="text-md mb-0"><b>{{$key+1}}.</b> {{$item->name}}
                    <b class="d-block">Std ID: {{$item->stdID}}</b>
                  </h5>
                  @endforeach
                </div>
                <br>
                <div class="text-muted ">
                  <h3>Email </h3>
                  <p class="text-md mb-0"><b>{{$proposal->emailaddress}}.</b> 
                </div>
  
                <h3 class="mt-5 text-muted">Project files</h3>
                <ul class="list-unstyled">
                  <li>
                    <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> {{$proposal->file}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
</div>
{{-- Supervisor assign --}}
<div class="modal fade" id="assignSupervisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{action('Admin\Third_Year_propoalController@supervisor_assign')}}" method="POST" >
      @csrf
      <input type="hidden" name="id" value="{{$proposal->id}}">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Supervisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-select form-control form-select-sm p-1" name="supervisor" aria-label=".form-select-sm example">
          <option selected>Select Supervisor</option>
          @foreach ($supervisors as $row)
          <option value="{{$row->id}}">
          {{$row->name}}
          </option>
          @endforeach
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
    </form>
    
  </div>
</div>


<div class="modal fade" id="assignDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{action('Admin\Third_Year_propoalController@schedule')}}" method="POST" >
      @csrf
      <input type="hidden" name="id" value="{{$proposal->id}}">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Supervisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <input type="text" name="date" id="" class="form-control datepicker" value="{{date('d/m/Y', strtotime($proposal->schedule))}}"><br>
          <input type="time" name="time" id="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
    </form>
    
  </div>
</div>
{{-- Supervisor assign --}}
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script>
@endsection