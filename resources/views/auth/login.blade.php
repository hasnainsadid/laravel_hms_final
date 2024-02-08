<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrueMedicare Haven | Login</title>
  <link rel="shortcut icon" href="{{asset('frontend/admin/dist/img/fevicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/maicons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl-carousel/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <a href="index.php" class="nav-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    <div class="container">
      <!-- <div class="row"> -->
        <div class="col-md-12 col-lg-6">
          <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">TrueMedicare Haven</a>
        </div>
    </div> <!-- .container -->
  </nav>
   <div class="page-hero bg-image overlay-dark"  style="background-image: url({{asset('frontend/assets/img/bg_image_1.jpg')}}); background-position: bottom; height: 60vh; ">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Don't have an account?</span>
        <h1 class="display-4">Registration for Appointment</h1>
        <a href="{{route('patient.register')}}" class="btn btn-primary">Registration</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <a href="{{route('doctor.login')}}">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-secondary text-white">
                  <i class="nav-icon fas fa-user-md"></i>
                </div>
                <p>Login as a Doctor</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <a href="{{route('patient.login')}}">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-primary text-white">
                  <i class="nav-icon fas fa-wheelchair"></i>
                </div>
                <p>Login as a Patient</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <a href="{{route('admin.login')}}">
            <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-accent text-white">
                  <span class="mai-person-outline"></span>
                </div>
                <p>Login as an Admin</p>
              </div>
            </a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/theme.js')}}"></script>
</body>
</html>