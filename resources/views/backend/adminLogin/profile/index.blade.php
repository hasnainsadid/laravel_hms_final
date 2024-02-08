@extends('backend.adminLogin.layouts.app')
@section('title', 'Admin Profile')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Admin Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin Profile</li>
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
          <img src="{{asset('')}}images/{{$admin->img}}" height="260px" class="img-fluid" width="260px" alt="image">
        </div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- form start -->
            <form>
              <div class="card-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="{{$admin->name}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control form-control-border" id="exampleInputPassword1" value="{{$admin->email}}" readonly>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <input type="text" name="status" class="form-control form-control-border" id="exampleInputPassword1" value="Active" readonly>
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