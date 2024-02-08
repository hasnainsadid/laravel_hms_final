@extends('backend.adminLogin.layouts.app')
@section('title', 'All Admins')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Admins</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">View Admins</li>
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
                    <th>Sl No</th>
                    <th>Image</th>
                    <th>Admin Name</th>
                    <th>Email Address</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach ($admins as $item)
                  <tr>
                    <td style="width: 1.3rem;">{{$i++}}</td>
                    <td><img width="50px" src="{{asset('')}}images/{{$item->img}}" alt="Profile picture"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>Active</td>
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
  <!-- /.content -->
</div>
@endsection