@extends('layout.app')

@section('title')
    Contact Us
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
					<a href="{{ route('about') }}" class="mx-3 py-1 px-2">About</a>
					<a href="{{ route('menu') }}" class="mx-3 py-1 px-2">Menu</a>
					<a href="{{ route('pages') }}" class="mx-3 py-1 px-2">Pages</a>
					<a href="{{ route('contact') }}" class="mx-3 py-1 px-2 current">Contact</a>
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
	<section class="container contact py-3">
		<div class="contact-header text-center pb-5">
			<h1>Contact Us</h1>
			<p>We consider all the drivers of change gives you the components</p>
			<p>you need to change to create a truly happens.</p>
		</div>
		<div class="contact-card container mb-5">
			<form class="p-4">
				<div class="mb-3">
					<label class="form-label">Name</label>
					<input type="text" class="form-control" placeholder="Enter your name" />
				</div>
				<div class="mb-3">
					<label class="form-label">Email</label>
					<input type="text" class="form-control" placeholder="Enter email address" />
				</div>
				<div class="mb-3">
					<label class="form-label">Subject</label>
					<input type="text" class="form-control" placeholder="Write a subject" />
				</div>
				<div class="mb-3">
					<label class="form-label">Message</label>
					<textarea class="form-control" rows="3" placeholder="Write your message"></textarea>
				</div>
				<button type="submit" class="btn">Send</button>
			</form>
		</div>
	</section>
	<section class="container contact pt-3 pb-5">
		<div class="our-contact pt-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h4>Call Us:</h4>
						<p class="call">+1-234-567-8900</p>
					</div>
					<div class="col">
						<h4>Call Us:</h4>
						<p>Mon-Fri: 11am - 8pm</p>
						<p>Sat, Sun: 9am - 10pm</p>
					</div>
					<div class="col">
						<h4>Our Location::</h4>
						<p>123 Bridge Street</p>
						<p>Nowhere Land, LA 12345</p>
						<p>United States</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection