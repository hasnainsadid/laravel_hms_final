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
            @if (session('msg'))
              <div class="alert alert-success">{{session('msg')}}</div>
            @endif
          <form action="{{route('doctor.prescription.store')}}" method="post">
            <div class="card-head">
              <div class="row">
                <div class="col-md-8">
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
                      <th class="btn btn-success" onclick="BtnAdd()"><i class="fas fa-plus-circle"></i></th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <tr id="trow">
                      <td scope="row">1</td>
                      <td>
                        <select name="medicine[]" class="form-control">
                          <option disabled selected>Select Medicine</option>
                          @foreach ($medicine as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                      </td>
                      <td><input type="text" name="dose[]" class="form-control"></td>
                      <td><input type="text" name="days[]" class="form-control"></td>
                    </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-success my-5 d-block w-25" >Submit</button>
              </div>
            </form>  
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

@section('script')
<script>
  $(document).ready(function() {
    var addButton = $('.btn-success');
    var wrapper = $('#dynamic_field');
    var x = 1;
    $(addButton).click(function() {
      x++;
      $(wrapper).append('<tr><td>' + x + '</td><td><select name="medicine[]" class="form-control"><option disabled selected>Select Medicine</option>@foreach ($medicine as $item)<option value="{{$item->name}}">{{$item->name}}</option>@endforeach</select></td><td><input type="text" name="dose[]" class="form-control"></td><td><input type="text" name="days[]" class="form-control"></td><td><button class="btn btn-outline-danger remove_field"><i class="fas fa-trash text-danger"></i></button></td></tr>'); // add new row
    });
    $(wrapper).on('click', '.remove_field', function(e) {
      e.preventDefault();
      $(this).parent().parent().remove(); // remove row
      x--;
    });
  });
</script>
@endsection