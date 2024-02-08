<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrueMedicare Haven | Register</title>
  <link rel="shortcut icon" href="{{asset('frontend/admin/dist/img/fevicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/maicons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl-carousel/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <style>
    .button{
      border: 0.5px solid #fff; 
      color:aliceblue; 
      font-size:1rem;
      font-weight: 400;
    }
    .button:hover{
      color: gray;
      background: #fff
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-2">
          <a href="{{route('login')}}" class="navbar-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </div>
        <div class="col-10">
          <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">TrueMedicare Haven</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/bg_image_1.jpg')}}'); background-position: bottom; height: min-content; padding: 3rem">
  <div class="content-wrapper m-3">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center" style="color: rgba(22, 234, 199, 0.92)">Registration Patients</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-2">
            <!-- general form elements -->
            <div class="card card-primary" style="background: rgba(42, 39, 39, 0.2); color: #fff">
              <!-- form start -->
              <form method="post" action="{{route('patient.register.submit')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Patient's Name</label>
                    <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control form-control-border" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="date" name="dob" class="form-control form-control-border" id="exampleInputEmail1">
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Gender</label>
                          <div class="d-flex my-2">
                            <div class="form-check mr-4">
                              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male">
                              <label class="form-check-label" for="exampleRadios1">
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                              <label class="form-check-label" for="exampleRadios2">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Blood Group</label>
                          <select name="blood_grp" class="form-control form-control-border w-75">
                            <option selected disabled>Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O-">O-</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control form-control-border" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control form-control-border" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" name="phone" class="form-control form-control-border" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-sm m-auto d-block w-25 button">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>

  <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/theme.js')}}"></script>
</body>

</html>