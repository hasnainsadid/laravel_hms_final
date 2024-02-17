@extends('backend.adminLogin.layouts.app')
@section('title', 'View Billing')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Billing</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.loggedin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Billing</li>
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
            <div class="card-head">
              <h2 class="p-2">Patient Billing</h2>
            </div>

            {{-- <span class=" mt-5"></span> --}}
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Total Amout</th>
                    {{-- <th>Status</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @forelse ($billing as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->patient->name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->grand_total}}</td>
                  </tr>
                  @empty
                  <h4 class="p-3 bg-danger">No data found</h4>
                  @endforelse
                </tbody>
              </table>
              
            </div>
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