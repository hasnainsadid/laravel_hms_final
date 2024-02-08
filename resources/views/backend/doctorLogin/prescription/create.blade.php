@extends('backend.doctorLogin.layouts.app')
@section('title', 'Doctor Prescription')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Prescription</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('doctor.loggedin')}}">Dashboard</a></li>
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
          <div class="card p-4">
            <div class="card-head">
              <div class="row">
                <div class="col-md-8">
                  <form action="{{route('doctor.prescription.store')}}" method="post">
                    @csrf
                    Name: 
                    <select name="p_id" class="form-control">
                      <option value="">Select Patient</option>
                      @foreach ($appointment as $item)
                      <option value="{{$item->p_id}}">{{$item->patient->name}}</option>                          
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-4">
                    Date: 
                    <input type="date" name="date" class="form-control">
                  </div>
                </div>
              </div>

              <span class=" mt-5"></span>
              <div class="card-body">
              
                <table class="table" id="dynamic_field">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Medicine</th>
                      <th>Dose</th>
                      <th>Days</th>
                      {{-- <th class="btn btn-success" onclick="BtnAdd()">+</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">1</td>
                      <td><input type="text" name="medicine[]" class="form-control"></td>
                      <td><input type="text" name="dose[]" class="form-control"></td>
                      <td><input type="text" name="days[]" class="form-control"></td>
                      {{-- <td><button class="btn btn-outline-danger" onclick="BtnDlt(this)"><i class="fas fa-trash text-danger"></i></button></td> --}}
                    </tr>
                    <tr>
                      <td scope="row">2</td>
                      <td><input type="text" name="medicine[]" class="form-control"></td>
                      <td><input type="text" name="dose[]" class="form-control"></td>
                      <td><input type="text" name="days[]" class="form-control"></td>
                    </tr>
                    <tr>
                      <td scope="row">3</td>
                      <td><input type="text" name="medicine[]" class="form-control"></td>
                      <td><input type="text" name="dose[]" class="form-control"></td>
                      <td><input type="text" name="days[]" class="form-control"></td>
                    </tr>
                    
                  </tbody>
                </table>
                <button type="submit" class="btn btn-success my-5 d-block w-25" >Submit</button>
              </form>  
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