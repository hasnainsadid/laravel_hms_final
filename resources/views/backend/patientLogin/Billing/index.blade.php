@extends('backend.patientLogin.layouts.app')
@section('title', 'Patient Billing')
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
          <div class="card p-4">
            <div class="card-head">
              <div class="row">
                <div class="col-md-8">
                  Name: <input type="text" name="name" value="{{Auth::guard('patient')->user()->name}}" readonly class="form-control">
                </div>
                <div class="col-md-4">
                  Date: <input type="date" name="date"  class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  Email: <input type="email" value="{{Auth::guard('patient')->user()->email}}" readonly name="email" class="form-control">
                </div>
                <div class="col-md-4">
                  Phone: <input type="text" value="{{Auth::guard('patient')->user()->phone}}" readonly name="phone"  class="form-control">
                </div>
              </div>
            </div>

            <span class=" mt-5"></span>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Details</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Amount</th>
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
              <div class="d-flex align-items-center" style="float: right">
                <span class="p-3">Total</span> 
                <input type="number" value="80" class="form-control w-50" readonly>
              </div>
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