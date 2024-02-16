@extends('backend.patientLogin.layouts.app')
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
            <li class="breadcrumb-item"><a href="{{route('patient.loggedin')}}">Dashboard</a></li>
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
              @forelse ($prescription as $key=>$item)
              <div class="card mb-3">
                <div class="card-head p-4" style="display: flex; aline-item:center; justify-content: space-between">
                  <h4><u>Date:</u> {{ \Carbon\Carbon::parse($item->date)->format('d M, Y') }}</h4>
                  <div class="text-center">
                    <h3 class="ms-auto"><i>Doctor Name</i></h3>
                    <span class="h4">{{$item->doctor->name}}</span>
                  </div>
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-hover text-center">
                    <thead>
                      <tr>
                        {{-- <th>SL. No</th> --}}
                        <th>Medicine Name</th>
                        <th>Details</th>
                        <th>Days</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        {{-- <td>{{++$key}}</td> --}}
                        <td>
                          <ol>
                            {{-- {{implode(', ' , $item->m_id)}} --}}
                            @foreach ($item->m_id as $medi)
                              <li>{{ $medi ?? ''}}</li>
                            @endforeach
                          </ol>
                        </td>
                        <td>
                          <ol style="list-style-type: none">
                            @foreach ($item->dose as $dose)
                              <li>{{$dose}}</li>
                            @endforeach
                          </ol>
                        </td>
                        <td>
                          <ol style="list-style-type: none">
                            @foreach ($item->days as $day)
                              <li>{{$day ?? ''}}</li>
                            @endforeach
                          </ol>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              @empty <h4 class="bg-danger p-2">No Prescription</h4>
              @endforelse
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