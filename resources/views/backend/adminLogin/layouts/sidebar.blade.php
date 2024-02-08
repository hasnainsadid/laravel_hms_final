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
        <img src="{{asset('')}}images/{{Auth::guard('admin')->user()->img}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a>
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
          <a href="/admin" class="nav-link">
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
              <a href="{{route('profile.me')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.change_pass')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin_info.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin_info.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Admin</p>
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
              Appointments
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="add_appointment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Appointment</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="{{route('appointment.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('appointment.pending')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('appointment.approved')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Approve Appointment</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Appointment -->

        <!-- Doctors -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Doctors
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctor.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Doctors</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Doctors -->

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
              <a href="{{route('patient.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Patients</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('patient.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Patients</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Patients -->

        <!-- Seats -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bed"></i>
            <p>
              Seats
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('seat.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Seat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('seat.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Total Seats</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Seats -->

        <!-- Billing -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>
              Billing
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('add.billing')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Billing</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.billing')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All Billing</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Billing -->

        <!-- Admission -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>
              Admission
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="{{route('patient.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Billing</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{route('admission.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Admissions</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Admission -->

        <!-- Prescription -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-prescription"></i>
            <p>
              Prescription
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.prescription')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Prescription</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Prescription -->

        {{-- messges --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-inbox"></i>
            <p>
              Messages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admin.messages')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Messages</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- /messges --}}

        <!-- Services -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hand-holding-medical"></i>
            <!-- <i class="fa-solid fa-hand-holding-medical"></i> -->
            <p>
              Services
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('department.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('department.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Departments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('treatment.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Treatment Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('treatment.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Treatment Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('medicine.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Medicine</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('medicine.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Medicine</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Services -->

        <!-- logout -->
        <li class="nav-item mb-5">
          <a href="{{route('admin.logout')}}" class="nav-link">
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