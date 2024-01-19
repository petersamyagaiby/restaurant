@extends('../layout/layout')

@section('title')
    Login
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
                    <a href="{{ route('login') }}" class="mx-3 py-1 px-2 current">Login</a>

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

<section class="container login py-3">
    <div class="login-header text-center pb-5">
        <h1>Sign in</h1>
        <p>to continue to Bistro Bliss</p>
    </div>
    <div class="login-card container mb-5">
        <form class="p-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" name="email"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="*******" name="password"/>
            </div>
            <button type="submit" class="btn">Login</button>
            {{-- <button type="submit" class="btn">Register</button> --}}
        </form>
    </div>
</section>
@endsection