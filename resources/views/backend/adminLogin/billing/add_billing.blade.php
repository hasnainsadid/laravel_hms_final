@extends('backend.adminLogin.layouts.app')
@section('title', 'Add Billing')
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
            <li class="breadcrumb-item active">Add Billing</li>
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
                <div class="col-md-4">
                  Name: <input type="text" name="name" value="patient name" readonly class="form-control">
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
                    <th class="btn btn-success" onclick="BtnAdd()">+</th>
                  </tr>
                </thead>
                <tbody id="Tbody">
                  <tr id="Trow">
                    <td scope="row">#</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                    <td><button class="btn btn-outline-danger" onclick="BtnDlt(this)"><i class="fas fa-trash text-danger"></i></button></td>
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