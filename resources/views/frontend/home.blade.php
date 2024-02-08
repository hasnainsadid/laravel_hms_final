@extends('frontend.layouts.app')

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('frontend/assets/img/bg_image_1.jpg')}});">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Let's make your life happier</span>
      <h1 class="display-4">Healthy Living</h1>
      <a href="#" class="btn btn-primary">Let's Consult</a>
    </div>
  </div>
</div>


<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with a doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>One</span>-Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>One</span>-Health Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section pb-0">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInDown">About Us</h1>
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1>Welcome to Your Health <br> Center</h1>
          <p class="text-grey mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. <br> <br>
          Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
          <!-- <a href="about.php" class="btn btn-primary">Learn More</a> -->
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="frontend/assets/img/bg-doctor.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

    <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
      @foreach ($doctor as $item)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('')}}images/{{$item->img}}" alt="doctor_image" height="280px">
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$item->name}}</p>
              <span class="text-sm text-grey">{{$item->department->name}}</span>
            </div>
          </div>
        </div>
      @endforeach                 
    </div>
  </div>
</div> 

<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Get in Touch</h1>
    <p class="text-center wow fadeInDown">Feel free to contact with us</p>
    
    @if (session('msg'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('msg')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <form class="contact-form mt-5" method="POST" action="{{route('messages')}}">
      @csrf
      <div class="row mb-3">
        <div class="col-sm-6 py-2 wow fadeInLeft">
          <label for="fullName">Name</label>
          <input type="text" id="fullName" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name.." value={{old('name')}}>
          @error('name')
            <strong class="text-denger">{{$message}}</strong>
          @enderror
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
          <label for="emailAddress">Email</label>
          <input type="text" id="emailAddress" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address.." value={{old('email')}}>
          @error('email')
            <strong class="text-denger">{{$message}}</strong>
          @enderror
        </div>
        <div class="col-12 py-2 wow fadeInUp">
          <label for="subject">Subject</label>
          <input type="text" id="subject" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Enter subject.." value={{old('subject')}}>
          @error('subject')
            <strong class="text-denger">{{$message}}</strong>
          @enderror
        </div>
        <div class="col-12 py-2 wow fadeInUp">
          <label for="message">Message</label>
          <textarea id="message" class="form-control @error('message') is-invalid @enderror" rows="8" name="message" placeholder="Enter Message.." value={{old('message')}}></textarea>
          @error('message')
            <strong class="text-denger">{{$message}}</strong>
          @enderror
        </div>
      </div>
      <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
    </form>
  </div>
</div>

<div class="maps-container wow fadeInUp">
  <div id="google-maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.745288660335!2d90.37694107413742!3d23.778154287712596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74e8282b185%3A0x5e029ded49de5bfc!2sIDB%20Bhaban%2C%20E%2F8-A%2C%20Dhaka%201207!5e1!3m2!1sen!2sbd!4v1695393491435!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>

<div class="page-section banner-home bg-image" style="background-image: url(frontend/assets/img/banner-pattern.svg);">
  <div class="container py-5 py-lg-0">
    <div class="row align-items-center">
      <div class="col-lg-4 wow zoomIn">
        <div class="img-banner d-none d-lg-block">
          <img src="frontend/assets/img/mobile_app.png" alt="">
        </div>
      </div>
      <div class="col-lg-8 wow fadeInRight">
        <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
        <a href="#"><img src="frontend/assets/img/google_play.svg" alt=""></a>
        <a href="#" class="ml-2"><img src="frontend/assets/img/app_store.svg" alt=""></a>
      </div>
    </div>
  </div>
</div>
@endsection