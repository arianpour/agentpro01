@extends('layout.master')
@section('title','Login')
@section('page-header-plugin')

		<!-- Page -->
<link rel="stylesheet" href="css/pages/login.css">
@stop
@section('page-header-scripts')

@stop
@section('page-js')

@stop
@section('body-class','page-login layout-full page-dark')
@section('page')

		<!-- Page -->
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">>
	<div class="page-content vertical-align-middle">
		<div class="brand">
			<img class="brand-img" src="images/logo.png" alt="...">
			<h2 class="brand-text">Remark</h2>
		</div>
		<p>Sign into your pages account</p>
		<form method="POST" action="/auth/login" role="form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">


			<div class="form-group">
				<label class="sr-only" for="inputEmail">Email</label>
				<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<label class="sr-only" for="inputPassword">Password</label>
				<input type="password" class="form-control" id="inputPassword" name="password"
				       placeholder="Password">
			</div>
			<div class="form-group clearfix">
				<div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
					<input type="checkbox" id="inputCheckbox" name="remember">
					<label for="inputCheckbox">Remember me</label>
				</div>
				<a class="pull-right" href="forgot-password.html">Forgot password?</a>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Sign in</button>
		</form>
		<p>Still no account? Please go to <a href="register.html">Register</a></p>

		<footer class="page-copyright page-copyright-inverse">
			<p>WEBSITE BY amazingSurge</p>
			<p>© 2015. All RIGHT RESERVED.</p>
			<div class="social">
				<a href="javascript:void(0)">
					<i class="icon bd-twitter" aria-hidden="true"></i>
				</a>
				<a href="javascript:void(0)">
					<i class="icon bd-facebook" aria-hidden="true"></i>
				</a>
				<a href="javascript:void(0)">
					<i class="icon bd-dribbble" aria-hidden="true"></i>
				</a>
			</div>
		</footer>
	</div>
</div>
<!-- End Page -->
@stop

@section('page-scripts')

		<!-- Plugins For This Page -->
<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>
<!-- Scripts For This Page -->
<script src="assets/js/components/jquery-placeholder.js"></script>

<script>
	(function(document, window, $) {
		'use strict';

		var Site = window.Site;
		$(document).ready(function() {
			Site.run();
		});
	})(document, window, jQuery);
</script>


@stop
