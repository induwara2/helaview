@extends('includes.design')

@section('body')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Listings</h2><span>Grid Layout With Sidebar</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Categories</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-lg-9 col-md-8 padding-right-30">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-25">

				<div class="col-md-6 col-xs-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="{{url('/listing/'.Request::segment(2).'/grid')}}" class="grid active"><i class="fa fa-th"></i></a>
						<a href="{{url('/listing/'.Request::segment(2).'/list')}}" class="list"><i class="fa fa-align-justify"></i></a>
					</div>
				</div>

				<div class="col-md-6 col-xs-6">
					<!-- Sort by -->
					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>Default Order</option>	
								<option>Highest Rated</option>
								<option>Most Reviewed</option>
								<option>Newest Listings</option>
								<option>Oldest Listings</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<!-- Sorting / Layout Switcher / End -->

			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-01.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="3.5"></div>
								<h3>The Gallery Café <i class="verified-icon"></i></h3>
								<span>65 Rosmead place, Colombo 07</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-02.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Friday, November 25</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="5.0"></div>
								<h3>Tantalize 2022</h3>
								<span>110 Ananda Coomaraswamy Mawatha, Colombo 07</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->		

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-03.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Starting from $59 per night</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="2.0"></div>
								<h3>The Kingsbury</h3>
								<span>48 Janadhipathi Mawatha, Colombo 01</span>
							</div>
							<span class="like-icon"></span>
						</div>

					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-04.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="5.0"></div>
								<h3>Hotel De Pilawoos <i class="verified-icon"></i></h3>
								<span>Chatham Street 100, Colombo 03</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-05.jpg" alt="">
							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="3.5"></div>
								<h3>Surfing</h3>
								<span>Weligama</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-6 col-md-12">
					<a href="listings-single-page.html" class="listing-item-container compact">
						<div class="listing-item">
							<img src="/images/listing-item-06.jpg" alt="">

							<div class="listing-badge now-closed">Now Closed</div>

							<div class="listing-item-content">
								<div class="numerical-rating" data-rating="4.5"></div>
								<h3>Upali's by Nawaloka</h3>
								<span>65 Dr CWW Kannangara Mawatha, Colombo 07</span>
							</div>
							<span class="like-icon"></span>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-3 col-md-4">
			<div class="sidebar">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-30">Filters</h3>

					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<input type="text" placeholder="What are you looking for?" value=""/>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Type -->
						<div class="col-md-12">
							<select data-placeholder="All Categories" class="chosen-select" >
                            <option>All Categories</option>	        
                            <option>Eat & Drink</option>                        
						    <option>Shops</option>
						    <option>Hotels</option>
						    <option>Restaurants</option>
						    <option>Fitness</option>
						    <option>Events</option>
                            <option>Other</option>
							</select>
						</div>
					</div>
					<!-- Row / End -->


					<!-- Row -->
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">

							<div class="input-with-icon location">
								<div id="autocomplete-container">
									<input id="autocomplete-input" type="text" placeholder="Location">
								</div>
								<a href="#"><i class="fa fa-map-marker"></i></a>
							</div>

						</div>
					</div>
					<!-- Row / End -->
					<br>

					<!-- Area Range -->
					<div class="range-slider">
						<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
					</div>


					<!-- More Search Options -->
					<a href="#" class="more-search-options-trigger margin-bottom-5 margin-top-20" data-open-title="More Filters" data-close-title="More Filters"></a>
					
					<div class="more-search-options relative">

						<!-- Checkboxes -->
						<div class="checkboxes one-in-row margin-bottom-15">
					
							<input id="check-a" type="checkbox" name="check">
							<label for="check-a">Elevator in building</label>

							<input id="check-b" type="checkbox" name="check">
							<label for="check-b">Friendly workspace</label>

							<input id="check-c" type="checkbox" name="check">
							<label for="check-c">Instant Book</label>

							<input id="check-d" type="checkbox" name="check">
							<label for="check-d">Wireless Internet</label>

							<input id="check-e" type="checkbox" name="check" >
							<label for="check-e">Free parking on premises</label>

							<input id="check-f" type="checkbox" name="check" >
							<label for="check-f">Free parking on street</label>

							<input id="check-g" type="checkbox" name="check">
							<label for="check-g">Smoking allowed</label>	

							<input id="check-h" type="checkbox" name="check">
							<label for="check-h">Events</label>
					
						</div>
						<!-- Checkboxes / End -->

					</div>
					<!-- More Search Options / End -->

					<button class="button fullwidth margin-top-25">Update</button>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>

@endsection