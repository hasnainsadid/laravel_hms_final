@extends('backend.adminLogin.layouts.app')
@section('title', 'All Patients')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Patients</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active">View Patients</li>
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
                    <th>Sl No</th>
                    <th>Patients's Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @foreach ($patients as $item)
                  @php($admit = $admission->where('p_id', $item->id)->where('release_date', NULL)->first())
                  <tr>
                    <td style="width: 1.3rem;">{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->blood_grp}}</td>
                    <td>{{$admit ? 'Indoor' : 'Outdoor'}}</td>
                    <td>
                      {{-- <a href="{{route('patient.edit', $item->id)}}" class="btn btn-info">Edit</a> --}}

                      @if (!$admit)
                        <form action="{{route('admission.admit_form')}}" method="post" class="d-inline">
                          @csrf
                          <input type="hidden" name="p_id" value="{{$item->id}}">
                          <button type="submit" class="btn btn-success">Admit</button>
                        </form>
                      @endif

                      {{-- <form action="{{route('patient.destroy', $item->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form> --}}
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