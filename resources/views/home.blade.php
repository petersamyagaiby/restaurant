@extends('layout.app')

@section('title')
    Bistro Bliss
@endsection

@section('basic-section')
    <nav class="navbar nav2">
        <div class="container mt-2">
            <div class="col-2">
				<a href="{{ route('home') }}"><img src="{{ asset('assets/images/Logo.png') }}" alt="" /></a>
			</div>
            <div class="col-6">
                <div class="d-flex">
                    <a href="{{ route('home') }}" class="mx-3 py-1 px-2 current">Home</a>
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
	<!-- Hero Section -->
    <section class="hero text-center mb-5">
        <div class="hero-content">
            <div class="hero-header">
                <h1>Best food for</h1>
                <h1>your taste</h1>
            </div>
            <div class="hero-body">
                <p>Discover delectable cuisine and unforgettable moments</p>
                <p>in our welcoming, culinary haven.</p>
            </div>
            <div class="mb-5">
                <span class="my-btn btn-1"><a href="{{ route('book-table') }}">Book A Table</a></span>
                <span class="my-btn btn-2"><a href="{{ route('menu') }}">Explore Menu</a></span>
            </div>
        </div>
    </section>

    <!-- Browse Our Menu Section -->
    <section class="menu container text-center my-5">
        <h1 class="my-5">Browse Our Menu</h1>
        <div class="row">
            <div class="col-3">
                <div class="container browse-contrainer">
                    <div class="container my-4">
                        <span><img src="{{ asset('assets/images/home/icon-1.png') }}" alt="Breakfast" /></span>
                        <div class="browse-content my-2">
                            <h1 class="my-3">Breakfast</h1>
                            <p class="my-3">In the new era of technology we look in the future with certainty and pride for our life.</p>
                            <a href="#">Explore Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container browse-contrainer">
                    <div class="container my-4">
                        <span><img src="{{ asset('assets/images/home/icon-2.png') }}" alt="Main Dishes" /></span>
                        <div class="browse-content my-2">
                            <h1 class="my-3">Main Dishes</h1>
                            <p class="my-3">In the new era of technology we look in the future with certainty and pride for our life.</p>
                            <a href="#">Explore Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container browse-contrainer">
                    <div class="container my-4">
                        <span><img src="{{ asset('assets/images/home/icon-3.png') }}" alt="Drinks" /></span>
                        <div class="browse-content my-2">
                            <h1 class="my-3">Drinks</h1>
                            <p class="my-3">In the new era of technology we look in the future with certainty and pride for our life.</p>
                            <a href="#">Explore Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container browse-contrainer">
                    <div class="container my-4">
                        <span><img src="{{ asset('assets/images/home/icon-4.png') }}" alt="Desserts" /></span>
                        <div class="browse-content my-2">
                            <h1 class="my-3">Desserts</h1>
                            <p class="my-3">In the new era of technology we look in the future with certainty and pride for our life.</p>
                            <a href="#">Explore Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
