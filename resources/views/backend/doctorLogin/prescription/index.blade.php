@extends('backend.doctorLogin.layouts.app')
@section('title', 'Prescriptions')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Prescriptions</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('doctor.loggedin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Prescription</li>
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
              @if (session('msg'))
                  <div class="alert alert-success">{{session('msg')}}</div>
              @endif
              <table id="example2" class="table table-bordered table-hover text-center">
                <thead>
                  <tr>
                    <th style="width: 1.3rem;">Sl No</th>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Medicine</th>
                    <th>Dose</th>
                    <th>Days</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($prescription as $key=>$item)
                    <tr>
                      <td style="width: 1.3rem;">{{++$key}}</td>
                      <td>{{$item->patient->name}}</td>
                      <td>{{\Carbon\Carbon::parse($item->date)->format('d M, Y')}}</td>
                      <td>{{$item->medicine}}</td>
                      <td>{{$item->dose}}</td>
                      <td>{{$item->days}} days</td>
                      
                    </tr>
                  @endforeach
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
</div>
@endsection