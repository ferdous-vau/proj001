@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <form action="{{action('Admin\Third_Year_propoalController@multipl_delete')}}" method="post">
          @csrf
        <div class="card-header">
          <h3 class="card-title"><button type="submit" class="btn btn-danger btn-sm">Delete All Selected</button></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <td>
                        <input type="checkbox" name="proposal[]" id="checkAll">
                    </td>
                      <th style="width: 1%">
                          No.
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 36%">
                          Team Members
                      </th>
                      <th style="width: 10%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%" class="text-right">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($proposals as $row)
                  <tr>
                    <td>
                      <input type="checkbox" name="proposal[]" id="checkItem" value="{{$row->id}}">
                    </td>
                    <td>
                        {{$i++}}
                    </td>
                    <td>
                        <a>
                          {{$row->projectTitle}}
                        </a>
                    </td>
                    <td>
                      @foreach (json_decode($row->members) as $key => $item)
                          <div class="group">
                              <p style="
                              margin: 0;
                          "><b>Name:</b> {{$item->name}} &nbsp; <b>ID:</b>  {{$item->stdID}} </p>
                          </div>
                        @endforeach
                        
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-xs" href="{{action('Admin\Final_Year_propoalController@view_project',['id' => $row->id])}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-danger btn-xs" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            
          </table>
        </div>
        <!-- /.card-body -->
      </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
<script language="javascript">
  $("#checkAll").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
</script>
@endsection