@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content" style="background-color: #DAC5B4; height: 578px;" >
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-3 mt-3 mb-3">
                    <h1 class="text-success">Submitted Successfully.</h1>
                </div>
                
                <a href="{{action('AdminController@view_proposal')}}"><button type="button" class="btn btn-info">View Project Proposal</button></a>
            </div> 
        </div>
    </section>
</div>
@endsection