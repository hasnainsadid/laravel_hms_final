@extends('backend.adminLogin.layouts.app')
@section('title', 'Add New Patient')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Patient</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('patient.index')}}">View Patients</a></li>
            <li class="breadcrumb-item active">Add Patient</li>
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
            {{-- Session Message --}}
            @if (session('msg'))
              <div class="alert alert-success">{{session('msg')}}</div>
            @endif

            <!-- form start -->
            <form method="post" action="{{route('patient.store')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Patient Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Of Birth</label>
                  <input type="date" name="dob" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gender</label>
                  <select name="gender" class="form-control form-control-border">
                    <option value="" selected disabled>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Blood Group</label>
                  <select name="blood_grp" class="form-control form-control-border">
                    <option value="" selected disabled>Select Blood Group</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>O+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
                    <option>O-</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" name="email" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection