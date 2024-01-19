@extends('../layout/layout')

@section('title')
    Profile
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
                    <a href="{{ route('profile') }}" class="mx-3 py-1 px-2 current">Profile</a>

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
<section class="container profile py-3">
    <div class="profile-header text-center pb-5">
        <h1>Welcome</h1>
    </div>
    <div class="profile-card container mb-5">
        <div class="mb-3">
            <p class="pt-4">Name: {{ $user->name }}</p>
        </div>
        <div class="mb-3">
            <p class="">Email: {{ $user->email }}</p>
        </div>
        <div class="mb-3">
            {{-- <button class="btn">Edit Profile</button> --}}
            <a href="{{ route('profile.edit', $user->id) }}" class="my-1"><button type="submit" class="btn">Edit Profile</button></a>
            {{-- <br> --}}
            <a href="{{ route('book-table') }}" class="my-1"><button type="submit" class="btn">Book A Table</button></a>
            {{-- <br> --}}
            <a href="{{ route('profile.mybooking') }}" class="my-1 mb-3"><button type="submit" class="btn">My Bookings</button></a>
            {{-- <br> --}}

       
        </div>
    </div>
</section>
@endsection