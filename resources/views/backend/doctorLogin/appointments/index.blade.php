@extends('backend.doctorLogin.layouts.app')
@section('title', 'View Appointments')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Appointment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
            <li class="breadcrumb-item active">View Appointment</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover text-center">
                <thead>
                  <tr>
                    <th style="width: 1.3rem;">Sl No</th>
                    <th>Patient's Name</th>
                    <th>Date</th>
                    <th>Reason</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($appointment as $key=>$item)
                  <tr>
                    <td style="width: 1.3rem;">{{++$key}}</td>
                    <td>{{$item->patient->name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->reason}}</td>
                    <td style="color: {{$item->status == 0 ? 'red' : 'green'}}">{{$item->status == 0 ? 'Pending' : 'Approved'}}</td>
                  </tr>
                  @empty <h4 class="bg-danger p-2">No Appointment Yet</h4>
                  @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection