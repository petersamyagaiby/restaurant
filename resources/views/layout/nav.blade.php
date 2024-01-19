<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
		<link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/japanese-food.png') }}" type="image/x-icon">
		<title>@yield('title')</title>
	</head>
	<body>
		<nav class="navbar nav1">
			<div class="container">
				<div class="d-flex pt-1">
					<!-- <div class="col-6"> -->
					<div class="me-4">
						<p><img src="{{ asset('assets/images/Nav/Icon.png') }}" alt="" /> (414) 857 - 0107</p>
					</div>
					<!-- <div class="col-6"> -->
					<div>
						<p><img src="assets/images/Nav/Icon-1.png" alt="" /> yummy@bistrobliss</p>
					</div>
				</div>
				<div>
					<img src="{{ asset('assets/images/Nav/1.png') }}" alt="Twitter" />
					<img src="{{ asset('assets/images/Nav/2.png') }}" alt="Facebook" />
					<img src="{{ asset('assets/images/Nav/3.png') }}" alt="Instagram" />
					<img src="{{ asset('assets/images/Nav/4.png') }}" alt="Github" />
				</div>
			</div>
		</nav>

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

		@yield('basic-section')

		<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    </body>
</html>
