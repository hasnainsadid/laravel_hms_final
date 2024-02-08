@extends('backend.adminLogin.layouts.app')
@section('title', 'All Admissions')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Admissions</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">View Admissions</li>
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
                    <th>Patient Name</th>
                    <th>Seat Title</th>
                    <th>Admission Date</th>
                    <th>Release Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach ($admission as $item)
                  <tr>
                    <td style="width: 1.3rem;">{{$i++}}</td>
                    <td>{{$item->patient->name ?? ''}}</td>
                    <td>{{$item->seat->name}}</td>
                    <td>{{$item->admission_date}}</td>
                    <td>{{$item->release_date == NULL ? 'Admitted Yet' : $item->release_date}}</td>
                    <td>
                      @if ($item->release_date == NULL)
                      <form action="{{route('admission.release', $item->id)}}" method="POST">
                        @csrf
                        <button class="btn btn-success"> Release </button>
                      </form>
                      @else
                          <button class="btn bg-cyan" disabled>Released</button>
                      @endif
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