@extends('backend.patientLogin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{Auth::guard('patient')->user()->name}}, <span style="color: #cecece;">Welcome to the Dashboard.</span></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content mt-3">
    <div class="container-fluid">
      <div class="row">
      <!-- appointment goes here -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="{{route('patient.appointment')}}">Total Patient Appointment</a></span>
              <span class="info-box-number">{{$total_appointment}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-calendar-alt"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><a href="{{route('patient.appointment')}}">Approved Appointment</a></span>
              <span class="info-box-number">{{$approved_appointment}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /appointment goes here -->
    </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection