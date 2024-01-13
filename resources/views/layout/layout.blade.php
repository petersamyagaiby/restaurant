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
					<img src="{{ asset('assets/images/Nav/1.png') }}" alt="Twitter" />
					<img src="{{ asset('assets/images/Nav/2.png') }}" alt="Facebook" />
					<img src="{{ asset('assets/images/Nav/3.png') }}" alt="Instagram" />
					<img src="{{ asset('assets/images/Nav/4.png') }}" alt="Github" />
				</div>
			</div>
		</nav>

        @yield('basic-section')

        <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    </body>
</html>
