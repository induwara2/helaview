<!DOCTYPE html>


<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>Helaview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	 <!--=============== FAVICON ===============-->
	 <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/main-color.css" id="colors">
    <link rel="stylesheet" href="/toast/toastr.min.css" id="colors">
	<link rel="stylesheet" href="/css/testlang.css">

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
					<a href="{{url('/')}}"><img src="/images/logo.png" alt=""><b>HELAVIEW</b></a>
                    
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
								<li><a href="{{url('/listing/Shops/list')}}">Shops </a>
									
								</li>
								<li><a href="{{url('/listing/hotels/list')}}">Hotels</a>
									
								</li>
								<li><a href="{{url('/listing/Restaurant/list')}}">Restaurant</a>
									
								</li>
								<li><a href="{{url('/listing/Fitness/list')}}">Fitness</a>
									
								</li>
                                <li><a href="{{url('/listing/events/list')}}">events</a>
									
								</li>
                                <li><a href="{{url('/listing/other/list')}}">other</a>
									
								</li>
							</ul>
						</li>

						<li><a href="{{('/about')}}">About</a>
							
						</li>

						<li><a href="{{('/contact')}}" >Contact</a>
							
						</li>
						
						<li><a href="#" > <img src="/images/language.png" height="15px" width="15px"> </a>
							<ul>
								<li><a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;">English</a>

								</li>
								<li><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;">French</a>
									
								</li>								
                                <li><a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;">German</a>
																
								</li>
								<li><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;">Spanish</a>
									
								</li>	
								<li><a href="#" onclick="doGTranslate('en|ta');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;">Tamil</a>
									
								</li>							
															

							</ul>
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
                            <div class="user-name"><span><img src="\images\dashboard-avatar.jpg" alt=""></span>Hi, {{  Auth::user('web')->name }}!</div>
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
                    

					<a href="{{url('/hotellogin')}}" class="button border with-icon">Become a host</span> <i class="sl sl-icon-plus"></i></a>
				
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

<!-- Copyrights -->
<div class="col-md-12">
    <div class="copyrights">?? 2021 HELAVIEW. All Rights Reserved.</div>
</div>




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



</body>


</html>