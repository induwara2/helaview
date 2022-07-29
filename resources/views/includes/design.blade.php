<!DOCTYPE html>


<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>Helaview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/main-color.css" id="colors">
    <link rel="stylesheet" href="/toast/toastr.min.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="no-shadow">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="#"><img src="/images/logo.png" alt=""><b>HELAVIEW</b></a>
                    
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="{{url('/')}} " class="{{ Request::segment(1)=='' ? 'current':'' }}">Home</a>
							
						</li>

						<li><a href="#" class="{{ Request::segment(1)=='listing' ? 'current':'' }}">Categories</a>
							<ul>
								<li><a href="{{url('/listing/all/list')}}">All Categories</a>
									
								</li>
                                <li><a href="{{url('/listing/eat & drink/list')}}">Eat & Drink</a>
									
								</li>
								<li><a href="{{url('/list-layout')}}">Shops </a>
									
								</li>
								<li><a href="{{url('/list-layout')}}">Hotels</a>
									
								</li>
								<li><a href="{{url('/list-layout')}}">Restaurant</a>
									
								</li>
								<li><a href="{{url('/list-layout')}}">Fitness</a>
									
								</li>
                                <li><a href="{{url('/list-layout')}}">events</a>
									
								</li>
                                <li><a href="{{url('/list-layout')}}">other</a>
									
								</li>
							</ul>
						</li>

						<li><a href="#">About us</a>
							
						</li>

						<li><a href="#" >Contact us</a>
							
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">

                    @if(Auth::guard('web')->check())
                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>Hi, {{  Auth::user('web')->name }}!</div>
                            <ul>
                                <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                                <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                                <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                                <li><a href="/logout"><i class="sl sl-icon-power"></i> Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                    @endif
                    

					<a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form action="/login" method="post" class="login">
                                    @csrf
								<p class="form-row form-row-wide">
									<label for="email">Email Address:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="email" id="email" value="" required/>
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password" value="" required/>
									</label>
									<span class="lost_password">
										<!--<a href="#" >Lost Your Password?</a>-->
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form action="/register" method="post" class="register">
                                @csrf
							<p class="form-row form-row-wide">
								<label for="name2">Name:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="name" id="name2" value="" required/>
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Mail"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Repeat Password:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password_confirmation" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->


		</div>
	</div>
	<!-- Header / End -->

</header>

<div class="clearfix"></div>
<!-- Header Container / End -->

@yield('body')


<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="/images/logo.png" alt="" ><b>HELAVIEW</b>
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Listing</a></li>					
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Partners</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>No.388 Union Place, Colombo 02</span> <br>
					Phone: <span>(112) 124-457 </span><br>
					E-Mail:<span> <a href="#">info@helaview.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2021 HELAVIEW. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/scripts/jquery-migrate-3.3.2.min.js"></script>
<script type="text/javascript" src="/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="/scripts/chosen.min.js"></script>
<script type="text/javascript" src="/scripts/slick.min.js"></script>
<script type="text/javascript" src="/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="/scripts/counterup.min.js"></script>
<script type="text/javascript" src="/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="/scripts/custom.js"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="/scripts/leaflet.min.js"></script>

<!-- Leaflet Maps Scripts -->
<script src="/scripts/leaflet-markercluster.min.js"></script>
<script src="/scripts/leaflet-gesture-handling.min.js"></script>
<script src="/scripts/leaflet-listeo.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="/scripts/leaflet-autocomplete.js"></script>
<script src="/scripts/leaflet-control-geocoder.js"></script>

<script src="/toast/toastr.min.js"></script>



<!-- Typed Script -->
<script type="text/javascript" src="/scripts/typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
strings: ["Attractions"," Restaurants"," Hotels"],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>



<!-- Home Search Scripts -->
<script>
    $(window).on('load', function() { $('.msps-shapes').addClass('shapes-animation'); });
</script>
 
<script src="/scripts/parallax.min.js"></script>
<script>
const parent = document.getElementById('scene');
const parallax = new Parallax(parent, {
  limitX: 50,
  limitY: 50,  
});
 
 
$('.msps-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1000,
    fade: true,
    cssEase: 'linear'
});

// toast options
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

// show session erros
@if(session()->has('error'))
    toastr.error('{{ session()->get('error') }}');
@endif

// show session success messages
@if(session()->has('success'))
    toastr.success('{{ session()->get('success') }}');
@endif

// show form validation errors
@foreach ($errors->all() as $error)
    toastr.error('{{ $error }}');
@endforeach

</script>
<!--Chat feature - Tidio-->
<script src="//code.tidio.co/mjsywqny9d9dawu5yaoojp3keyl8klfr.js" async></script>

</body>


</html>