@extends('master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Supervisors List</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0" style="overflow-x:auto;">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        No.
                    </th>
                    <th  style="width: 35% ">
                        Supervisor Name
                    </th>
                    <th  style="width: 35% ">
                      Supervisor Email
                  </th>
                    <th class="text-right" style="width: 20%">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @php
                  $i =1;
              @endphp
              @foreach ($supervisors as $row)
                <tr>
                    <td>
                        {{$i++}}
                    </td>
                    <td >
                        {{$row->name}}
                    </td>
                    <td >
                      {{$row->email}}
                  </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-info btn-xs" href="{{action('Admin\SupervisorController@edit',['id'=>$row->id])}}">
                        <i class="fas fa-edit">
                        </i>
                        edit
                       </a>
                      <a class="btn btn-danger btn-xs" href="{{action('Admin\SupervisorController@delete',['id'=>$row->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        del
                       </a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
@endsection