@extends('backend.adminLogin.layouts.app')
@section('title', 'Add New Doctor')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Doctor</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('doctor.index')}}">View Doctors</a></li>
            <li class="breadcrumb-item active">Add Doctor</li>
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
            <form method="post" action="{{route('doctor.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Doctor Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Designation</label>
                  <input type="text" name="designation" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-group">
                  <label for="formFile" class="form-label">Image</label>
                  <input class="form-control form-control-border" type="file" name="img" id="formFile">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" name="email" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Department</label>
                  <select name="d_id" class="form-control form-control-border">
                    <option value="" selected disabled>Select Department</option>
                    @foreach ($department as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>                        
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select name="status" class="form-control form-control-border">
                    <option value="" selected disabled>Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
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