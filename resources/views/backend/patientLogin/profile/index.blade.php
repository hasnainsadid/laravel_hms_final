@extends('backend.patientLogin.layouts.app')
@section('title', 'Patient Profile')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Patient Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('patient.loggedin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Patient Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Patient Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="{{$patient->name}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control form-control-border" id="exampleInputPassword1" value="{{$patient->email}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1" value="{{$patient->address}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gender</label>
                  <input type="text" name="gender" class="form-control form-control-border" id="exampleInputPassword1" value="{{$patient->gender}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Blood Group</label>
                  <input type="text" name="blood_grp" class="form-control form-control-border" id="exampleInputPassword1" value="{{$patient->blood_grp}}" readonly>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection