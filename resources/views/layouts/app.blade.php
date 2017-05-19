<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

	<meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body role="document" class="@yield('bodyClasses')">
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

						@if(Route::getCurrentRoute()->uri() != '/')
							<li><a href="{{ route('home') }}">Home</a></li>
						@endif
						@if(Route::getCurrentRoute()->uri() != 'our-story')
							<li><a href="{{ route('our-story') }}">Our Story</a></li>
						@endif
						<li class="nav-logo">
							<img src="/images/wedding-logo1.png" class="nav-logo" />
						</li>
						@if(Route::getCurrentRoute()->uri() != 'wedding-party')
                        	<li><a href="{{ route('wedding-party') }}">Wedding Party</a></li>
						@endif
						{{-- <li><a href="{{ route('registry') }}">Registry</a></li> --}}
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->

    <script src="/js/app.js"></script>

	@yield('page_scripts')
</body>
</html>
