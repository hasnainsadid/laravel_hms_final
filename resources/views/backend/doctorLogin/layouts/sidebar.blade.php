<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">LifeHeaven Hospital</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('images/'. Auth::guard('doctor')->user()->img)}}" class="" style="border-radius: 50px; height: 45px; width: 50px" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::guard('doctor')->user()->name}}</a>
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
        <!-- DashBoard -->
        <li class="nav-item">
          <a href="{{route('doctor.loggedin')}}" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- /DashBoard -->

        <!-- Profile -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.profile')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctor.change_pass')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Profile -->

        <!-- Appointment -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Appointment
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.appointment')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Appointment</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Appointment -->

        <!-- Patients -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wheelchair"></i>
            <p>
              Patients
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('patient.all')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Patients</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Patients -->

        {{-- Prescription --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-prescription"></i>
            <p>
              Prescriptions
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.prescription.submit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Prescriptions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctor.prescription')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Prescriptions</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- /Prescription --}}
        
        <!-- logout -->
        <li class="nav-item">
          <a href="{{route('doctor.logout')}}" class="nav-link">
            <i class=" nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
        <!-- /logout -->

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
{{-- /sidebar --}}