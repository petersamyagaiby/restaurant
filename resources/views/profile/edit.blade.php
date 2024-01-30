@extends('../layout/layout')

@section('title')
    Edit Profile
@endsection

@section('basic-section')
    <nav class="navbar nav2">
        <div class="container mt-2">
            <div class="col-2">
                <a href="{{ route('homePage') }}"><img src="{{ asset('assets/images/Logo.png') }}" alt="" /></a>
            </div>
            <div class="col-6">
                <div class="d-flex">
                    <a href="{{ route('homePage') }}" class="mx-3 py-1 px-2">Home</a>
                    <a href="{{ route('about') }}" class="mx-3 py-1 px-2">About</a>
                    <a href="{{ route('menu') }}" class="mx-3 py-1 px-2">Menu</a>
                    <a href="{{ route('pages') }}" class="mx-3 py-1 px-2">Pages</a>
                    <a href="{{ route('contact') }}" class="mx-3 py-1 px-2">Contact</a>
                    @if (!Auth::user())
                        <a href="{{ route('login') }}" class="mx-3 py-1 px-2">Login</a>

                        <a href="{{ route('register') }}" class="mx-3 py-1 px-2 current">Register</a>
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
            <h1>Edit Your Profile</h1>
        </div>
        <div class="login-card container mb-5">
            <div class="p-4">
                <form class="pb-3" method="POST" action="{{ route('profile.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
                    </div>
                    <button type="submit" class="btn log-btn">Update Profile</button>
                </form>
                <form action="{{ route('profile') }}">
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn reg-btn text-center">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
