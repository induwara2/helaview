@extends('includes.design')

@section('body')

<!-- Banner
================================================== -->
<div class="main-search-container plain-color">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-search-headlines">
						<h2>
							Find Nearby 
							<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
							<span class="typed-words"></span>
						</h2>
						<h4>Expolore top-rated attractions, activities and more</h4>
					</div>

					<div class="main-search-input">

						<div class="main-search-input-item">
							<input type="text" placeholder="What are you looking for?" value=""/>
						</div>

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="Location">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
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

						<button class="button" onclick="window.location.href='list-layout'">Search</button>

					</div>
				</div>
			</div>
			<!-- Features Categories -->
			<div class="row">
				<div class="col-md-12">
					<h5 class="highlighted-categories-headline">Or browse featured categories:</h5>
					  
					<div class="highlighted-categories">
						<!-- Box -->
						<a href="{{url('/listing/hotels/list')}}" class="highlighted-category">
					    	<i class="im im-icon-Home"></i>
					    	<h4>Hotels</h4>
						</a>	

						<!-- Box -->
						<a href="{{url('/listing/eat & drink/list')}}" class="highlighted-category">
					    	<i class="im im-icon-Hamburger"></i>
					    	<h4>Eat &amp; Drink</h4>
						</a>	

						<!-- Box -->
						<a href="{{url('/listing/events/list')}}" class="highlighted-category">
					    	<i class="im im-icon-Electric-Guitar"></i>
					    	<h4>Events</h4>
						</a>	

						<!-- Box -->
						<a href="{{url('/listing/fitness/list')}}" class="highlighted-category">
					    	<i class="im im-icon-Dumbbell"></i>
					    	<h4>Fitness</h4>
						</a>		
					</div>
					
				</div>
			</div>
			<!-- Featured Categories - End -->
		</div>

	</div>

	<!-- Main Search Photo Slider -->
	



</div>

<!-- Content
================================================== -->
<section class="fullwidth margin-top-0 padding-top-0 padding-bottom-40" data-background-color="#fcfcfc">
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline margin-top-75">
				<strong class="headline-with-separator">Popular Categories</strong>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="categories-boxes-container-alt margin-top-5 margin-bottom-30">
				
				<!-- Box -->
				<a href="{{url('/list-layout')}}" class="category-small-box-alt">
					<i class="im im-icon-Hamburger"></i>
					<h4>Eat & Drink</h4>
					<span class="category-box-counter-alt">12</span>
					<img src="/images/category-box-01.jpg">
				</a>

				<!-- Box -->
				<a href="{{url('/list-layout')}}" class="category-small-box-alt">
					<i class="im im-icon-Home"></i>
					<h4>Hotels</h4>
					<span class="category-box-counter-alt">32</span>
					<img src="/images/category-box-02.jpg">
				</a>

				<!-- Box -->
				<a href="{{url('/list-layout')}}" class="category-small-box-alt">
					<i class="im im-icon-Shopping-Bag"></i>
					<h4>Shops</h4>
					<span class="category-box-counter-alt">11</span>
					<img src="/images/category-box-03.jpg">
				</a>

				<!-- Box -->
				<a href="{{url('/list-layout')}}" class="category-small-box-alt">
					<i class="im im-icon-Cocktail"></i>
					<h4>Nightlife</h4>
					<span class="category-box-counter-alt">15</span>
					<img src="/images/category-box-04.jpg">
				</a>

				<!-- Box -->
				<a href="{{url('/list-layout')}}" class="category-small-box-alt">
					<i class="im im-icon-Electric-Guitar"></i>
					<h4>Events</h4>
					<span class="category-box-counter-alt">21</span>
					<img src="/images/category-box-05.jpg">
				</a>

			</div>
		</div>
	</div>
</div>
</section>
<!-- Category Boxes / End -->


<!-- Listings -->
<div class="container margin-top-70">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Most Visited Places</strong>
				<span>Discover top-rated local businesses</span>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="simple-slick-carousel dots-nav">

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-01.jpg" alt="">

						<div class="listing-badge now-open">Now Open</div>
						
						<div class="listing-item-content">
							<span class="tag">Eat & Drink</span>
							<h3>The Gallery Café</h3>
							<span>65 Rosmead place, Colombo 07</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter">(12 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-02.jpg" alt="">
						<div class="listing-item-details">
							<ul>
								<li>Friday, November 25</li>
							</ul>
						</div>
						<div class="listing-item-content">
							<span class="tag">Events</span>
							<h3>TANTALIZE 2022</h3>
							<span>110 Ananda Coomaraswamy Mawatha, Colombo 07</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="5.0">
						<div class="rating-counter">(23 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->		

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-03.jpg" alt="">
						<div class="listing-item-details">
							<ul>
								<li>Starting from $59 per night</li>
							</ul>
						</div>
						<div class="listing-item-content">
							<span class="tag">Hotels</span>
							<h3>The Kingsbury</h3>
							<span>48 Janadhipathi Mawatha, Colombo 01</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="2.0">
						<div class="rating-counter">(17 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-04.jpg" alt="">

						<div class="listing-badge now-open">Now Open</div>

						<div class="listing-item-content">
							<span class="tag">Eat & Drink</span>
							<h3>Hotel De Pilawoos</h3>
							<span>Chatham Street 100, Colombo 03</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="5.0">
						<div class="rating-counter">(31 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-05.jpg" alt="">
						<div class="listing-item-content">
							<span class="tag">Other</span>
							<h3>Surfing</h3>
							<span>Weligama</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter">(46 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<a href="listings-single-page.html" class="listing-item-container">
					<div class="listing-item">
						<img src="/images/listing-item-06.jpg" alt="">

						<div class="listing-badge now-closed">Now Closed</div>

						<div class="listing-item-content">
							<span class="tag">Eat & Drink</span>
							<h3>Upali's by Nawaloka</h3>
							<span>65 Dr CWW Kannangara Mawatha, Colombo 07</span>
						</div>
						<span class="like-icon"></span>
					</div>
					<div class="star-rating" data-rating="4.5">
						<div class="rating-counter">(15 reviews)</div>
					</div>
				</a>
			</div>
			<!-- Listing Item / End -->
			</div>
			
		</div>

	</div>
</div>
<!-- Listings / End -->


<section class="fullwidth margin-top-70 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
	<!-- Info Section -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered">
					What Our Users Say
					<span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</span>
				</h3>
			</div>
		</div>

	</div>
	<!-- Info Section / End -->

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">From trip booking to trip end process was hassle free. Did not faced any issue anywhere. Overall, good experience.</div>
				</div>
				<div class="testimonial-author">
					<img src="/images/happy-client-01.jpg" alt="">
					<h4>Jennie Smith <span>Tourist</span></h4>
				</div>
			</div>
			
			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">HelaView is amazing! This web portal is going to help change the tourism industry in the country.</div>
				</div>
				<div class="testimonial-author">
					<img src="/images/happy-client-02.jpg" alt="">
					<h4>Dhammika Perera <span>Chairman of Hayleys</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Very user friendly online platform for small business owners and large scale hotel owners to shine! Bravo!</div>
				</div>
				<div class="testimonial-author">
					<img src="/images/happy-client-03.jpg" alt="">
					<h4>Mr. Rohan Karr<span>Managing Director of Kingsbury</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Categories Carousel / End -->

</section>


<!-- Parallax -->
<div class="parallax"
	data-background="/images/slider-bg-02.jpg"
	data-color="#36383e"
	data-color-opacity="0.6"
	data-img-width="800"
	data-img-height="505">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-sm-8">
					<h2>Become a host</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat efficitur faucibus. Nulla eget eros quis sapien accumsan feugiat. Sed posuere ac tortor eu sollicitudin. Proin finibus mattis quam,</p>
					<a href="listings-list-with-sidebar.html" class="button margin-top-25">Get Started</a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Parallax / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">From The Blog</strong>
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="/images/blog-compact-post-01.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>20 july 2022</li>
							</ul>
							<h3>Hotels for All Budgets</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="/images/blog-compact-post-02.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>14 june 2022</li>
							</ul>
							<h3>The 50 Cheapest Restaurants In Colombo</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="/images/blog-compact-post-03.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>26 may 2022</li>
							</ul>
							<h3>The Best Places To Visit In Kandy</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<div class="col-md-12 centered-content">
				<a href="{{ url('http://helaview.com/blog') }}" class="button border margin-top-10">View Blog</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->

@endsection
