@extends('stylestore.indexinfo')
@section('content')
<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">Login Now</h3>
          <form action="#">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" placeholder="Username" required>
              <input class="form-control mb-3" type="password" placeholder="Password" required>
              <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
              <a class="mt-3 d-block text-primary" href="#!">Forget Password?</a>
              <a class="mt-3 d-inline-block text-primary" href="register.html">Register Now</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="{{ asset('images/logo2.jpg') }}" alt="logo">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="dashboard-my-ads.html">My Ads</a></li>
            <li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
            <li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
            <li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex  align-items-center">
            <a href="index.html">
              <!-- Icon -->
              <img src="{{ asset('images/footer/phone-icon.png') }}" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="index.html"><img src="{{ asset('images/apps/google-play-store.png') }}" class="img-fluid" alt=""></a>
            <a href="index.html" class=" ml-3"><img src="{{ asset('images/apps/apple-app-store.png') }}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
@endsection
