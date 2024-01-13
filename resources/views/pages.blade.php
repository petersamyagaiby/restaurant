@extends('layout.app')

@section('title')
    Pages
@endsection

@section('basic-section')
	<nav class="navbar nav2">
		<div class="container mt-2">
			<div class="col-3">
				<a href="{{ route('home') }}"><img src="{{ asset('assets/images/Logo.png') }}" alt="" /></a>
			</div>
			<div class="col-5">
				<div class="d-flex">
					<a href="{{ route('home') }}" class="mx-3 py-1 px-2">Home</a>
					<a href="{{ route('about') }}" class="mx-3 py-1 px-2">About</a>
					<a href="{{ route('menu') }}" class="mx-3 py-1 px-2">Menu</a>
					<a href="{{ route('pages') }}" class="mx-3 py-1 px-2 current">Pages</a>
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
	<section class="container blog py-3">
		<div class="blog-header text-center pb-5">
			<h1>Our Blog & Articles</h1>
			<p>We consider all the drivers of change gives you the components you need</p>
			<p>to change to create a truly happens.</p>
		</div>
		<div class="container text-center mb-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/1.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">How to prepare a delicious gluten free sushi</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/2.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">Exclusive baking lessons from the pastry king</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/3.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">How to prepare the perfect fries in an air fryer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/4.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">How to prepare delicious chicken tenders</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/5.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">5 great cooking gadgets you can buy to save time</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/6.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">The secret tips & tricks to prepare a perfect burger</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/7.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">7 delicious cheesecake recipes you can prepare</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/8.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">5 great pizza restaurants you should visit this city</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/9.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">5 great cooking gadgets you can buy to save time</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/10.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">How to prepare a delicious gluten free sushi</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/11.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">Top 20 simple and quick desserts for kids</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 my-3">
					<div>
						<div class="card">
							<img src="assets/images/pages/12.png" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title text-start">January 3, 2023</h5>
								<p class="card-text text-start">Top 20 simple and quick desserts for kids</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection