@extends('layout.app')

@section('title')
    About Us
@endsection

@section('basic-section')
	<nav class="navbar nav2">
		<div class="container mt-2">
			<div class="col-2">
				<a href="{{ route('home') }}"><img src="{{ asset('assets/images/Logo.png') }}" alt="" /></a>
			</div>
			<div class="col-6">
				<div class="d-flex">
					<a href="{{ route('home') }}" class="mx-3 py-1 px-2">Home</a>
					<a href="{{ route('about') }}" class="mx-3 py-1 px-2 current">About</a>
					<a href="{{ route('menu') }}" class="mx-3 py-1 px-2">Menu</a>
					<a href="{{ route('pages') }}" class="mx-3 py-1 px-2">Pages</a>
					<a href="{{ route('contact') }}" class="mx-3 py-1 px-2">Contact</a>
					@if (!Auth::user())
                        	<a href="{{ route('login') }}" class="mx-3 py-1 px-2">Login</a>

                        	<a href="{{ route('register') }}" class="mx-3 py-1 px-2">Register</a>
                    @endif
					@if (Auth::user())
						<a href="{{ route('profile') }}" class="mx-3 py-1 px-2">Profile</a>

						<a href="{{ route('logout') }}" class="mx-3 py-1 px-2">logout</a>
					@endif
				</div>
			</div>
			<div class="col-2">
				<div class="d-flex flex-row-reverse">
					<a href="{{ route('book-table') }}" class="nav-btn">Book A Table</a>
				</div>
			</div>
		</div>
	</nav>
	<section class="container about-us py-5">
		<div class="d-flex">
			<div class="about-us-position col-6">
				<span>
					<img src="assets/images/about/Image.png" class="main-img" />
					<div class="overlay">
						<div class="container">
							<h1 class="text-center my-4">Come and visit us</h1>
							<div class="about-us-content">
								<p class="px-4"><img src="assets/images/about/phone.png" />(414) 857 - 0107</p>
								<p class="px-4"><img src="assets/images/about/mail.png" />happytummy@restaurant.com</p>
								<p class="px-4">
									<img src="assets/images/about/location.png" />837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles
								</p>
							</div>
						</div>
					</div>
				</span>
			</div>
			<div class="col-6 my-5 container">
				<div class="container about-us-content-body p-5">
					<h1 class="my-3">We provide healthy food for your family.</h1>
					<h6 class="my-3">
						Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and
						a vibrant ambiance. Rooted in city's rich culinary culture, we aim to honor our local roots while infusing a global
						palate.
					</h6>
					<p class="my-3">
						At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned
						for their warmth and dedication, strives to make every visit an unforgettable event.
					</p>
				</div>
			</div>
		</div>
	</section>
@endsection


		