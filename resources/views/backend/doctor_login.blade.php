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
  <div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('frontend/assets/img/bg_image_1.jpg')}}'); background-position: bottom; height: 88.6vh;">
    <div class="hero-section">
      <div class="container wow zoomIn">
        <div class="row m-auto">
          <div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2">
            <h3 class="text-center mt-5 mb-3" style="background-color: #578B9D; border-radius: 5px">Doctor Login</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $item)
                      <li>{{$item}}</li>
                    @endforeach
                  </ul>
                </div>
            @endif

            @if (session('msg'))
                <div class="alert alert-danger">{{session('msg')}}</div>
            @endif
            <form method="post" action="{{route('doctor.loggedin')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
              </div>
              <button type="submit" name="submit" class="btn btn-primary m-auto d-block w-50">Doctor Login</button>
            </form>
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