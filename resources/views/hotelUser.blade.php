@php
$hide_footer=1;
@endphp
@extends('includes.design')

@section('body')


	<!-- Dashboard -->
	<div id="dashboard">

		<!-- Navigation
		================================================== -->

		<!-- Responsive Navigation Trigger -->
		<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
		
		<div class="dashboard-nav">
			<div class="dashboard-nav-inner">

				<ul data-submenu-title="Main">
					<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
					<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
					<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
					<li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
				</ul>
				
				<ul data-submenu-title="Listings">
					<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
						<ul>
							<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
							<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
							<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
						</ul>	
					</li>
					<li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
					<li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
					<li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
				</ul>	

				<ul data-submenu-title="Account">
					<li class="active"><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
					<li><a href="index-2.html"><i class="sl sl-icon-power"></i> Logout</a></li>
				</ul>

		</div>
		</div>
		<!-- Navigation / End -->


		<!-- Content
		================================================== -->
		<div class="dashboard-content">

			<!-- Titlebar -->
			<div id="titlebar">
				<div class="row">
					<div class="col-md-12">
						<h2>My Profile</h2>
						<!-- Breadcrumbs -->
						<nav id="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Dashboard</a></li>
								<li>My Profile</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="row">

				<!-- Profile -->
				<div class="col-lg-6 col-md-12">
					<div class="dashboard-list-box margin-top-0">
						<h4 class="gray">Profile Details</h4>
						<div class="dashboard-list-box-static">
							
							<!-- Avatar -->
							<div class="edit-profile-photo">
								<img src="\images\dashboard-avatar.jpg" alt="">
								<div class="change-photo-btn">
									<div class="photoUpload">
										<span><i class="fa fa-upload"></i> Upload Photo</span>
										<input type="file" class="upload" />
									</div>
								</div>
							</div>
		
							<!-- Details -->
							<div class="my-profile">

								<label>Your Name</label>
								<input value="" type="text">

								<label>Phone</label>
								<input value="(123) 123-456" type="text">

								<label>Email</label>
								<input value="tom@example.com" type="text">

								<label>Notes</label>
								<textarea name="notes" id="notes" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

								<label><i class="fa fa-twitter"></i> Twitter</label>
								<input placeholder="https://www.twitter.com/" type="text">

								<label><i class="fa fa-facebook-square"></i> Facebook</label>
								<input placeholder="https://www.facebook.com/" type="text">

								<label><i class="fa fa-google-plus"></i> Google+</label>
								<input placeholder="https://www.google.com/" type="text">
							</div>
		
							<button class="button margin-top-15">Save Changes</button>

						</div>
					</div>
				</div>

				<!-- Change Password -->
				<div class="col-lg-6 col-md-12">
					<div class="dashboard-list-box margin-top-0">
						<h4 class="gray">Change Password</h4>
						<div class="dashboard-list-box-static">

							<!-- Change Password -->
							<div class="my-profile">
								<form action="/update-password" method="POST">
									@csrf
									<label class="margin-top-0">Current Password</label>
									<input type="password" name="old_password">

									<label>New Password</label>
									<input type="password" name="password">

									<label>Confirm New Password</label>
									<input type="password" name="password_confirmation">

									<button type="submit" class="button margin-top-15">Change Password</button>
								</form>
							</div>

						</div>
					</div>
				</div>


				<!-- Copyrights -->
				<div class="col-md-12">
					<div class="copyrights">?? 2021 Listeo. All Rights Reserved.</div>
				</div>

			</div>

		</div>
		<!-- Content / End -->


	</div>
	<!-- Dashboard / End -->


@endsection
