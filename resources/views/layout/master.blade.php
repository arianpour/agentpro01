<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<!-- the logo and site icon -->
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" alt="AgentPro">
	<link rel="shortcut icon" href="images/favicon.ico" >

	@include('layout.header')
	@yield('page-header-plugin')
	@yield('page-header-scripts')
	@yield('page-js')
	</head>
<body class="@yield('body-class') @yield('body-extra')">

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	@include('layout.navbar')
	@include('layout.menubar')
	@include('layout.gridebar')
			<!-- Page -->
	@yield('page')
			<!-- End Page -->
<footer>
	@include('layout.footer')
</footer>

	@include('layout.core-scripts')
	@yield('page-scripts')


</body>
</html>