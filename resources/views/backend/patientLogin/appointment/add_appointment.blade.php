@extends('backend.patientLogin.layouts.app')
@section('title', 'View Appointment')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Request Appointment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Request Appointment</li>
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
            <form method="post" action="{{route('newAppointment')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Doctor's Name</label>
                  <select name="doctor" class="form-control form-control-border">
                    <option selected disabled>Select Doctor</option>
                    @foreach ($doctor as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>                        
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Appointment Date</label>
                  <input type="date" name="date" class="form-control form-control-border" id="exampleInputEmail1">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Reason</label>
                  <input type="text" name="reason" class="form-control form-control-border" id="exampleInputPassword1">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button> <br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection