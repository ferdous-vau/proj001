<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{action('AdminController@dashboard')}}" class="brand-link">
      <img src="{{asset('public/frontend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LUPMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/frontend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{action('Profile\ProfileController@profile')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{action('AdminController@dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
            
          </li>
          @if (Auth::user()->userType == 'Admin')
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Supervisors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{action('Admin\SupervisorController@add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Supervisor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{action('Admin\SupervisorController@list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supervisor List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{action('Admin\Third_Year_propoalController@third_project')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Third Year</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{action('Admin\Final_Year_propoalController@final_project')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Final Year</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{action('Admin\StudentController@third_student')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Third Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{action('Admin\StudentController@final_student')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Final Year</p>
                </a>
              </li>
              
            </ul>
          </li>
          @php
              $btn = App\SwitchBtn::all();
              if (count($btn) > 0) {
                $check = App\SwitchBtn::first();
              }
          @endphp
          @if (count($btn) > 0)
          <li class="nav-item">
            <a @if($check->formSwitch == 'OFF') onclick="return confirm('Want to on the form?')" @else onclick="return confirm('Want to off the form?')" @endif href="@if($check->formSwitch == 'OFF') {{action('Admin\SwitchController@on',$check->id)}} @else {{action('Admin\SwitchController@off',$check->id)}} @endif" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Form [{{$check->formSwitch == 'OFF' ? 'ON' : 'OFF'}}]
              </p>
            </a>
          </li>
          @endif
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{action('AdminController@third_schedule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Third Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{action('AdminController@final_schedule')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Final Year</p>
                </a>
              </li>
            </ul>
          </li>-->
          @endif

          @if (Auth::user()->userType == 'Supervisor')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{action('Supervisor\supervisorController@third_project')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Third Year</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{action('Supervisor\supervisorController@final_project')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Final Year</p>
                  </a>
                </li>
              </ul>
          </li>
          @endif
          @if (Auth::user()->userType == 'Student')
          
          @endif
          <li class="nav-item ">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link text-danger">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Logout
              </p>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>