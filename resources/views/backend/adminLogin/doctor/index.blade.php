@extends('backend.adminLogin.layouts.app')
@section('title', 'All Doctors')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Doctors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">View Doctors</li>
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
                    <th>Doctor's Image</th>
                    <th>Doctor's Name</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Phone</th>
                    {{-- <th>Status</th> --}}
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach ($doctors as $item)
                  <tr>
                    <td style="width: 1.3rem;">{{$i++}}</td>
                    <td><img src="{{asset('')}}images/{{$item->img}}" alt="" width="40"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->designation}}</td>
                    <td>{{$item->department->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    {{-- <td>{{$item->status == 1 ? 'Active' : 'Inact+ive'}}</td> --}}
                    <td>
                      <a href="{{route('doctor.edit', $item->id)}}" class="btn btn-info">Edit</a>
                      <form action="{{route('doctor.destroy', $item->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
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