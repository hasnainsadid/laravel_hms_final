@extends('backend.adminLogin.layouts.app')
@section('title', 'All Seats')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Seats</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">View Seats</li>
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
                @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                <thead>
                  <tr>
                    <th style="width: 1.3rem;">Sl No</th>
                    <th>Seat Title</th>
                    <th>Cost</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach ($seat as $item)
                  @php($admit = $admission->where('seat_id', $item->id)->where('release_date', NULL)->first())
                  <tr>
                    <td style="width: 1.3rem;">{{$i++}}</td>
                    <td style="background-color: {{$admit ? '#ee534b' : '#b8eac9'}}; opacity: 0.8; color: {{$admit ? '#fff' : '#000'}}">{{$item->name}}</td>
                    <td>{{$item->cost}}</td>
                    <td style="background-color: {{$admit ? '#ee534b' : '#b8eac9'}}; opacity: 0.8; color: {{$admit ? '#fff' : '#000'}}">{{$admit ? 'Booked' : 'Available'}}</td>
                    <td>
                      <a href="{{route('seat.edit', $item->id)}}" class="btn btn-info">Edit</a> 
                      <form action="{{route('seat.destroy', $item->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
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