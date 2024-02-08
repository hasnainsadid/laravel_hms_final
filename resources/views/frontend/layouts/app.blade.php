<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TrueMedicare Haven</title>
  <link rel="shortcut icon" href="./admin/dist/img/fevicon.png" type="image/x-icon">
  <link rel="stylesheet" href="frontend/assets/css/maicons.css">
  <link rel="stylesheet" href="frontend/assets/css/bootstrap.css">
  <link rel="stylesheet" href="frontend/assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="frontend/assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="frontend/assets/css/theme.css">
</head>

<body>
  <div class="back-to-top"></div>

  @include('frontend.layouts.header')
  
  @yield('content')

  @include('frontend.layouts.footer')

<script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
<script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="frontend/assets/vendor/wow/wow.min.js"></script>
<script src="frontend/assets/js/theme.js"></script>

</body>
</html>