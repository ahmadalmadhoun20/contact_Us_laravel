<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Cybermate | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- theme meta -->
  <meta name="theme-name" content="classimax" />

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!--
  Essential stylesheets
  =====================================-->
  <link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/bootstrap-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="{{ route('index') }}">
						<h4> <span>C</span>ybermate <span>S</span>olution</h4>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('index') }}">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide @@dashboard">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('dashboard') }}">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@dashboardPage" href="{{ route('dashboard') }}">Dashboard</a></li>
									<li><a class="dropdown-item @@dashboardMyAds" href="{{ route('dashboardmyads') }}">Dashboard My Ads</a></li>
									<li><a class="dropdown-item @@dashboardFavouriteAds" href="{{ route('dashboardfavouriteads') }}">Dashboard Favourite Ads</a></li>
									<li><a class="dropdown-item @@dashboardArchivedAds" href="{{ route('dashboardarchivedads') }}">Dashboard Archived Ads</a></li>
									<li><a class="dropdown-item @@dashboardPendingAds" href="{{ route('dashboardpendingads') }}">Dashboard Pending Ads</a></li>

									<li class="dropdown dropdown-submenu dropright">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

										<ul class="dropdown-menu" aria-labelledby="dropdown0501">
											<li><a class="dropdown-item" href="{{ route('index') }}">Submenu 01</a></li>
											<li><a class="dropdown-item" href="{{ route('index') }}">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@pages">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@about" href="{{ route('about') }}">About Us</a></li>
									<li><a class="dropdown-item @@contact" href="{{ route('contact') }}">Contact Us</a></li>
									<li><a class="dropdown-item @@profile" href="{{ route('blog') }}">User Profile</a></li>
									<li><a class="dropdown-item @@404" href="{{ route('error') }}">404 Page</a></li>
									<li><a class="dropdown-item @@package" href="{{ route('package') }}">Package</a></li>
									<li><a class="dropdown-item @@singlePage" href="{{ route('singleblog') }}">Single Page</a></li>
									<li><a class="dropdown-item @@store" href="{{ route('store') }}">Store Single</a></li>
									<li><a class="dropdown-item @@blog" href="{{ route('blog') }}">Blog</a></li>
									<li><a class="dropdown-item @@singleBlog" href="{{ route('singleblog') }}">Blog Details</a></li>
									<li><a class="dropdown-item @@terms" href="{{ route('termscondition') }}">Terms &amp; Conditions</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="{{ route('category') }}">Ad-Gird View</a></li>
									<li><a class="dropdown-item @@listView" href="{{ route('adlist') }}">Ad-List View</a></li>

									<li class="dropdown dropdown-submenu dropleft">
										<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

										<ul class="dropdown-menu" aria-labelledby="dropdown0201">
											<li><a class="dropdown-item" href="{{ route('index') }}">Submenu 01</a></li>
											<li><a class="dropdown-item" href="{{ route('index') }}">Submenu 02</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="{{ route('login') }}">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('adlisting') }}"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<!--===============================
=            Hero Area            =
================================-->




<!--===========================================
=            Popular deals section            =
============================================-->









@yield('content')










<!--==========================================
=            All Category Section            =
===========================================-->




<!--====================================
=            Call to Action            =
=====================================-->


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
          <img src="images/logo2.jpg" alt="logo">
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
            <li><a href="{{ route('dashboardmyads') }}">My Ads</a></li>
            <li><a href="{{ route('dashboardfavouriteads') }}">Favourite Ads</a></li>
            <li><a href="{{ route('dashboardarchivedads') }}">Archived Ads</a></li>
            <li><a href="{{ route('dashboardpendingads') }}">Pending Ads</a></li>
            <li><a href="{{ route('termscondition') }}">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="{{ route('category') }}">Category</a></li>
            <li><a href="{{ route('singleblog') }}">Single Page</a></li>
            <li><a href="{{ route('store') }}">Store Single</a></li>
            <li><a href="{{ route('singleblog') }}">Single Post</a>
            </li>
            <li><a href="{{ route('blog') }}">Blog</a></li>



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
              <img src="images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="index.html"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
            <a href="index.html" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a></p>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
          <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
</footer>

<!--
Essential Scripts
=====================================-->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap-slider.js') }}"></script>
<script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
<script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<!-- google map -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js') }}" defer></script>

<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>


