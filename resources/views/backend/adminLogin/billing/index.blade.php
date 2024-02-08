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
                    <th>Items</th>
                    <th>Total Amout</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>napa</td>
                    <td>2</td>
                    <td>20</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>napa</td>
                    <td>2</td>
                    <td>20</td>
                    <td>40</td>
                  </tr>
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