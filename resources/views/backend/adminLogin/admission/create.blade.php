@extends('backend.adminLogin.layouts.app')
@section('title', 'Admit New Patient')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Admit Patient</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admission.index')}}">View Admissions</a></li>
            <li class="breadcrumb-item active">Admit Patient</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">

            {{-- Session Message --}}
            @if (session('msg'))
              <div class="alert alert-success">{{session('msg')}}</div>
            @endif

            <!-- form start -->
            <form method="post" action="{{route('admission.admit')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="p_id" value="{{$p_id}}" ><br>
                  <label for="exampleInputEmail1">Seat Title</label>
                  <select name="seat_id" class="form-control">
                    <option selected disabled>Select Seat</option>
                    @foreach ($seat as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
                  {{-- <label for="exampleInputEmail1">Admission Date</label>
                  <input type="date" name="admission_date" class="form-control"> --}}
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection