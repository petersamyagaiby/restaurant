@extends('layout.app')

@section('title')
    Book A Table
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
	<section class="container book py-3">
		<div class="book-header text-center pb-5">
			<h1>Book A Table</h1>
			<p>We consider all the drivers of change gives you the components</p>
			<p>you need to change to create a truly happens.</p>
		</div>
		<div class="book-card container">
			<form class="p-4" action="" method="POST" action="{{ route('book-table') }}">
				@csrf
				<div class="mb-3">
					<label for="Date" class="form-label">Date</label>
					<input type="date" class="form-control" name="date" />
				</div>
				<div class="mb-3">
					<label for="Time" class="form-label">Time</label>
					<input type="time" class="form-control" name="time" />
				</div>
				<div class="mb-3">
					<label for="Name" class="form-label">Name</label>
					<input type="text" class="form-control" placeholder="Enter your name" name="name" />
				</div>
				<div class="mb-3">
					<label for="Phone" class="form-label">Phone</label>
					<input type="tel" class="form-control" placeholder="x-xxx-xxx-xxx" name="phone" />
				</div>
				<div class="mb-3">
					<label for="Total Person" class="form-label">Total Person</label>
					<select class="form-select" name="total_person">
						<option value="1">1 Person</option>
						<option value="2">2 Persons</option>
						<option value="3">3 Persons</option>
						<option value="4">4 Persons</option>
					</select>
				</div>
				<button type="submit" class="btn">Book A Table</button>
			</form>
		</div>
	</section>

	<section class="container map"></section>
@endsection