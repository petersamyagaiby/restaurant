@extends('layout.app')

@section('title')
    Menu
@endsection

@section('basic-section')
    {{-- {{ dd($menu) }} --}}
    <nav class="navbar nav2">
        <div class="container mt-2">
            <div class="col-2">
                <a href="{{ route('homePage') }}"><img src="{{ asset('assets/images/Logo.png') }}" alt="" /></a>
            </div>
            <div class="col-6">
                <div class="d-flex">
                    <a href="{{ route('homePage') }}" class="mx-3 py-1 px-2">Home</a>
                    <a href="{{ route('about') }}" class="mx-3 py-1 px-2">About</a>
                    <a href="{{ route('menu') }}" class="mx-3 py-1 px-2 current">Menu</a>
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

    <section class="container blog py-3">
        <div class="blog-header text-center pb-5">
            <h1>Our Menu</h1>
            <p>We consider all the drivers of change gives you the components you need</p>
            <p>to change to create a truly happens.</p>
        </div>
        <div class="container text-center mb-5">
            <div class="row justify-content-center">
                @if ($menuItems->isEmpty())
                    <p class="no-menu">No Menu Items found.</p>
                @endif
                @foreach ($menuItems as $menuItem)
                    <div class="col-12 col-md-6 col-lg-3 my-3">
                        <div>
                            <div class="card menu-card">
                                <img src="{{ asset('storage/' . $menuItem->image) }}" class="card-img-top" />
                                <div class="card-body text-center">
                                    <h5 class="card-title">$ {{ $menuItem->price }}</h5>
                                    <h6 class="card-text">{{ $menuItem->name }}</h6>
                                    <p class="card-text">{{ $menuItem->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
