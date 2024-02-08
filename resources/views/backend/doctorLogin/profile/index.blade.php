@extends('backend.doctorLogin.layouts.app')
@section('title', 'Dcotor Profile')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Doctor Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/doctors')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Doctor Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <img src="{{asset('')}}images/{{$doctor->img}}" height="270px" class="img-fluid" width="260px" alt="image">
        </div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Doctor Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="{{$doctor->name}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control form-control-border" id="exampleInputPassword1" value="{{$doctor->email}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Designation</label>
                  <input type="text" name="designation" class="form-control form-control-border" id="exampleInputPassword1" value="{{$doctor->designation}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <input type="text" name="status" class="form-control form-control-border" id="exampleInputPassword1" value="{{$doctor->status == '1' ? 'Active' : 'Inactive'}}" readonly>
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