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
					<div class="me-4">
						<p><img src="{{ asset('assets/images/Nav/Icon.png') }}" alt="" /> (414) 857 - 0107</p>
					</div>
					<div>
						<p><img src="{{ asset('assets/images/Nav/Icon-1.png') }}" alt="" /> yummy@bistrobliss</p>
					</div>
				</div>
				<div>
					<a href="#"><img src="{{ asset('assets/images/Nav/1.png') }}" alt="Twitter" /></a>
					<a href="#"><img src="{{ asset('assets/images/Nav/2.png') }}" alt="Facebook" /></a>
					<a href="#"><img src="{{ asset('assets/images/Nav/3.png') }}" alt="Instagram" /></a>
					<a href="#"><img src="{{ asset('assets/images/Nav/4.png') }}" alt="Github" /></a>
				</div>
			</div>
		</nav>

        @yield('basic-section')

        <footer class="pb-5">
            <div class="mb-5">
                <div class="container py-5">
                    <div class="my-5"></div>
                    <div class="row g-5">
                        <div class="col-3">
                            <div class="foot-logo mb-4">
                                <div>
                                    <img src="{{ asset('assets/images/Footer/Logo.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="foot-body mb-4">
                                <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
                            </div>
                            <div class="foot-link">
                                <a href="#"><img src="{{ asset('assets/images/Footer/1.png') }}" alt="" /></a>
                                <a href="#"><img src="{{ asset('assets/images/Footer/2.png') }}" alt="" /></a>
                                <a href="#"><img src="{{ asset('assets/images/Footer/3.png') }}" alt="" /></a>
                                <a href="#"><img src="{{ asset('assets/images/Footer/4.png') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-1">
                            <div class="row">
                                <div class="foot-header col-12 mb-3">
                                    <p>Pages</p>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Home</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">About</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Menu</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Pricing</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Blog</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Contact</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Delivery</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-2">
                            <div class="row">
                                <div class="foot-header col-12 mb-3">
                                    <p>Utility Pages</p>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Start Here</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Styleguide</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Password Protected</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">404 Not Found</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Licenses</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">Changelog</a>
                                </div>
                                <div class="foot-color col-12 my-2">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="foot-header col-12 mb-4">
                                    <p>Follow Us On Instagram</p>
                                </div>
                                <div class="row footer-img">
                                    <div class="col-6">
                                        <img src="{{ asset('assets/images/Footer/Mask group-1.png') }}" alt="" />
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('assets/images/Footer/Mask group-2.png') }}" alt="" />
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('assets/images/Footer/Mask group-3.png') }}" alt="" />
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('assets/images/Footer/Mask group-4.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright container text-center">
                <p class="pb-5">Copyright © 2023 Hashtag Developer. All Rights Reserved</p>
            </div>
        </footer>
        <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    </body>
</html>
