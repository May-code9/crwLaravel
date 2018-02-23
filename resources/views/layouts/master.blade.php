<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="v5/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="v5/style.css" type="text/css" />
	<link rel="stylesheet" href="v5/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="v5/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="v5/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="v5/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="v5/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="v5/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>@yield('title')</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

    @include('partials.header.header')

		@yield('content')

    @include('partials.footer.footer')

</body>
</html>
