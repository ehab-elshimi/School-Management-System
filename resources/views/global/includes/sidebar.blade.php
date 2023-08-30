<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          @php
          echo "<span class='badge-success'>".auth()->user()->email."</span>";
          @endphp
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('dashboard.home')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Home
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          @if(auth()->user()->hasRole('Super Admin'))
          <li class="nav-item">
            <a href="{{route('super-admin.users.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    System Roles
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          @endif
          @if(auth()->user()->hasRole('Admin'))
          <li class="nav-item">
            <a href="{{route('admin.teachers.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Teachers
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.students.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Students
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.parents.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Parents
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.subjects.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Subjects
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.classrooms.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Class Rooms
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{route('super-admin.users.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                    Exams
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li> --}}
          @endif
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="fa fa-power-off" aria-hidden="true"></i>
              <p>
                  Logout
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>