@extends('backend.doctorLogin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{Auth::guard('doctor')->user()->name}}, <span style="color: #cecece;">Welcome to the Dashboard.</span></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- appointment goes here -->
      <div class="col-12 col-sm-6 col-md-4">
        <div class="info-box mb-5">
          <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-calendar-alt"></i></span>
          <div class="info-box-content">
            <span class="info-box-text"><a href="{{route('doctor.appointment')}}">Pending Appointment(s)</a></span>
            <span class="info-box-number">{{$appointment}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /appointment goes here -->


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
@endsection