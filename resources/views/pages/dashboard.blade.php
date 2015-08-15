@extends('layout.master')
@section('title','User Dashboard')
@section('page-header-plugin')

		<!-- Plugins For This Page -->
<link rel="stylesheet" href="vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="vendor/aspieprogress/asPieProgress.css">

<!-- Page -->
<link rel="stylesheet" href="css/dashboard/v2.css">

@stop

@section('body-class','dashboard')
@section('page')

	<div class="page">
		<div class="page-header padding-0">
			<div class="widget widget-article type-flex">
				<div class="widget-header cover overlay">
					<img class="cover-image height-300" src="example-images/dashboard-header.jpg"
					     alt="">
					<div class="overlay-panel text-center vertical-align">
						<div class="widget-metas vertical-align-middle blue-grey-800">
							<div class="widget-title font-size-50 margin-bottom-35 blue-grey-800">Mount Mckinley</div>
							<ul class="list-inline font-size-14">
								<li>
									<i class="icon wb-map margin-right-5" aria-hidden="true"></i>                  Central and southern Alaska
								</li>
								<li class="margin-left-20">
									<i class="icon wb-heart margin-right-5" aria-hidden="true"></i>                  26,428
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-xlg-3 col-lg-4 col-md-12">
					<!-- Panel Web Designer -->
					<div class="widget widget-shadow">
						<div class="widget-content text-center bg-white padding-40">
							<div class="avatar avatar-100 margin-bottom-20">
								<img src="portraits/1.jpg" alt="">
							</div>
							<p class="font-size-20 blue-grey-700">Breno Bitencourt</p>
							<p class="blue-grey-400 margin-bottom-20">Web Designer</p>
							<p class="margin-bottom-35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
								nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
							</p>
							<ul class="list-inline font-size-18 margin-bottom-35">
								<li>
									<a class="blue-grey-400" href="javascript:void(0)">
										<i class="icon bd-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li class="margin-left-10">
									<a class="blue-grey-400" href="javascript:void(0)">
										<i class="icon bd-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li class="margin-left-10">
									<a class="blue-grey-400" href="javascript:void(0)">
										<i class="icon bd-dribbble" aria-hidden="true"></i>
									</a>
								</li>
								<li class="margin-left-10">
									<a class="blue-grey-400" href="javascript:void(0)">
										<i class="icon bd-instagram" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
							<button type="button" class="btn btn-primary padding-horizontal-40">Follow</button>
						</div>
					</div>
					<!-- End Panel Web Designer -->
				</div>

				<div class="col-xlg-6 col-lg-8 col-md-12">
					<!-- Panel Traffic -->
					<div class="widget widget-shadow example-responsive" id="widgetLinearea">
						<div class="widget-content padding-30" style="min-width:480px;">
							<div class="row padding-bottom-20" style="height:calc(100% - 322px);">
								<div class="col-sm-8 col-xs-6">
									<div class="blue-grey-700">YOUR TRAFFIC VIEWS</div>
								</div>
								<div class="col-sm-4 col-xs-6">
									<div class="row">
										<div class="col-xs-6">
											<div class="counter counter-md">
												<div class="counter-number-group text-nowrap">
													<span class="counter-number">76</span>
													<span class="counter-number-related">%</span>
												</div>
												<div class="counter-label blue-grey-400">PC Browser</div>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="counter counter-md">
												<div class="counter-number-group text-nowrap">
													<span class="counter-number">24</span>
													<span class="counter-number-related">%</span>
												</div>
												<div class="counter-label blue-grey-400">Mobile Phone</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="ct-chart margin-bottom-30" style="height:270px;"></div>
							<ul class="list-inline text-center margin-bottom-0">
								<li>
									<i class="icon wb-large-point blue-200 margin-right-10" aria-hidden="true"></i>                  PC BROWSER
								</li>
								<li class="margin-left-35">
									<i class="icon wb-large-point teal-200 margin-right-10" aria-hidden="true"></i>                  MOBILE PHONE
								</li>
							</ul>
						</div>
					</div>
					<!-- End Panel Traffic -->
				</div>

				<div class="col-xlg-3 col-md-12">
					<div class="row height-full">
						<div class="col-xlg-12 col-md-6" style="height:50%;">
							<!-- Panel Overall Sales -->
							<div class="widget widget-shadow">
								<div class="widget-content padding-30 bg-blue-600 white">
									<div class="counter counter-lg counter-inverse text-left">
										<div class="counter-label margin-bottom-20">
											<div>OVERALL SALES</div>
											<div>Lorem ipsum dolor sit amet</div>
										</div>
										<div class="counter-number-group margin-bottom-15">
											<span class="counter-number-related font-weight-bold">$</span>
											<span class="counter-number font-weight-bold">14,000</span>
										</div>
										<div class="counter-label">
											<div class="progress progress-xs margin-bottom-10 bg-blue-800">
												<div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100"
												     aria-valuemin="0" aria-valuenow="42" role="progressbar">
													<span class="sr-only">42%</span>
												</div>
											</div>
											<div class="counter counter-sm text-left">
												<div class="counter-number-group">
													<span class="counter-number font-size-14">42%</span>
													<span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Panel Overall Sales -->
						</div>

						<div class="col-xlg-12 col-md-6" style="height:50%;">
							<!-- Panel Today's Sales -->
							<div class="widget widget-shadow">
								<div class="widget-content padding-30 bg-red-600 white">
									<div class="counter counter-lg counter-inverse text-left">
										<div class="counter-label margin-bottom-20">
											<div>TODAY'S SALES</div>
											<div>Lorem ipsum dolor sit amet</div>
										</div>
										<div class="counter-number-group margin-bottom-10">
											<span class="counter-number-related font-weight-bold">$</span>
											<span class="counter-number font-weight-bold">41,160</span>
										</div>
										<div class="counter-label">
											<div class="progress progress-xs margin-bottom-10 bg-red-800">
												<div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100"
												     aria-valuemin="0" aria-valuenow="70" role="progressbar">
													<span class="sr-only">70%</span>
												</div>
											</div>
											<div class="counter counter-sm text-left">
												<div class="counter-number-group">
													<span class="counter-number font-size-14">70%</span>
													<span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Panel Today's Sales -->
						</div>
					</div>
				</div>
			</div>

			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-lg-4 col-md-6">
					<!-- Panel Followers -->
					<div class="panel" id="followers">
						<div class="panel-heading">
							<h3 class="panel-title">
								Followers
							</h3>
						</div>
						<div class="panel-body">
							<ul class="list-group list-group-dividered list-group-full">
								<li class="list-group-item">
									<div class="media">
										<div class="media-left">
											<a class="avatar avatar-online" href="javascript:void(0)">
												<img src="portraits/9.jpg" alt="">
												<i></i>
											</a>
										</div>
										<div class="media-body">
											<div class="pull-right">
												<button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
											</div>
											<div><a class="name" href="javascript:void(0)">Willard Wood</a></div>
											<small>@heavybutterfly920</small>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="media">
										<div class="media-left">
											<a class="avatar avatar-away" href="javascript:void(0)">
												<img src="portraits/10.jpg" alt="">
												<i></i>
											</a>
										</div>
										<div class="media-body">
											<div class="pull-right">
												<button type="button" class="btn btn-success btn-default btn-sm"><i class="icon wb-check" aria-hidden="true"></i>Following</button>
											</div>
											<div><a class="name" href="javascript:void(0)">Ronnie Ellis</a></div>
											<small>@kingronnie24</small>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="media">
										<div class="media-left">
											<a class="avatar avatar-busy" href="javascript:void(0)">
												<img src="portraits/11.jpg" alt="">
												<i></i>
											</a>
										</div>
										<div class="media-body">
											<div class="pull-right">
												<button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
											</div>
											<div><a class="name" href="javascript:void(0)">Gwendolyn Wheeler</a></div>
											<small>@perttygirl66</small>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="media">
										<div class="media-left">
											<a class="avatar avatar-off" href="javascript:void(0)">
												<img src="portraits/12.jpg" alt="">
												<i></i>
											</a>
										</div>
										<div class="media-body">
											<div class="pull-right">
												<button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
											</div>
											<div><a class="name" href="javascript:void(0)">Daniel Russell</a></div>
											<small>@danieltiger08</small>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Panel Followers -->
				</div>

				<div class="col-lg-4 col-md-6">
					<!-- Panel Tickets -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Tickets</h3>
						</div>
						<div class="panel-body">
							<ul class="list-group list-group-dividered list-group-full">
								<li class="list-group-item">
									<small class="label label-round label-info pull-right">Completed</small>
									<p><a class="hightlight" href="javascript:void(0)">Server unavaible</a>
										<span>[13060]</span>
									</p>
									<small>Opened by
										<a class="hightlight" href="javascript:void(0)">
                      <span class="avatar avatar-xs">
                        <img src="portraits/1.jpg" alt="">
                      </span>
											<span>Herman Beck</span>
										</a>
										<time datetime="2015-07-01T08:55">2 hours ago</time>
									</small>
								</li>
								<li class="list-group-item">
									<small class="label label-round label-warning pull-right">Pendening</small>
									<p><a class="hightlight" href="javascript:void(0)">Mobile App Problem</a>
										<span>[13061]</span>
									</p>
									<small>Opened by
										<a class="hightlight" href="javascript:void(0)">
                      <span class="avatar avatar-xs">
                        <img src="portraits/2.jpg" alt="">
                      </span>
											<span>Mary Adams</span>
										</a>
										<time datetime="2015-07-01T07:55">1 hour ago</time>
									</small>
								</li>
								<li class="list-group-item">
									<small class="label label-round label-primary pull-right">In progress</small>
									<p><a class="hightlight" href="javascript:void(0)">IE8 problem</a>
										<span>[13062]</span>
									</p>
									<small>Opened by
										<a class="hightlight" href="javascript:void(0)">
                      <span class="avatar avatar-xs">
                        <img src="portraits/3.jpg" alt="">
                      </span>
											<span>Caleb Richards</span>
										</a>
										<time datetime="2015-06-28T21:05">3 days ago</time>
									</small>
								</li>
								<li class="list-group-item">
									<small class="label label-round label-danger pull-right">Rejected</small>
									<p><a class="hightlight" href="javascript:void(0)">Respoonsive problem</a>
										<span>[13063]</span>
									</p>
									<small>Opened by
										<a class="hightlight" href="javascript:void(0)">
                      <span class="avatar avatar-xs">
                        <img src="portraits/4.jpg" alt="">
                      </span>
											<span>June Lane</span>
										</a>
										<time datetime="2015-06-27T13:05">4 days ago</time>
									</small>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Panel Tickets -->
				</div>

				<div class="col-lg-4 col-md-12">
					<!-- Panel Title -->
					<div class="widget widget-shadow" id="widgetGmap">
						<div class="map height-full" id="gmap"></div>
					</div>
					<!-- End Panel Title -->
				</div>
			</div>
		</div>
	</div>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

@stop

@section('page-scripts')

		<!-- Plugins For This Page -->
	<script src="vendor/chartist-js/chartist.min.js"></script>
	<script src="vendor/gmaps/gmaps.js"></script>
	<script src="vendor/matchheight/jquery.matchHeight-min.js"></script>
	<!-- Scripts For This Page -->
	<script src="js/components/gmaps.js"></script>
	<script src="js/components/matchheight.js"></script>

	<script>
		$(document).ready(function($) {

			Site.run();

			// widget-linearea
			(function() {
				var linearea = new Chartist.Line('#widgetLinearea .ct-chart', {
					labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
					series: [
						[0, 2.5, 2, 2.8, 2.6, 3.8, 0],
						[0, 1.4, 0.5, 2, 1.2, 0.9, 0]
					]
				}, {
					low: 0,
					showArea: true,
					showPoint: false,
					showLine: false,
					fullWidth: true,
					chartPadding: {
						top: 0,
						right: 10,
						bottom: 0,
						left: 0
					},
					axisX: {
						showGrid: false,
						labelOffset: {
							x: -14,
							y: 0
						},
					},
					axisY: {
						labelOffset: {
							x: -10,
							y: 0
						},
						labelInterpolationFnc: function(num) {
							return num % 1 === 0 ? num : false;
						}
					}
				});
			})();

			// widget gmap
			(function() {
				var map = new GMaps({
					el: '#gmap',
					lat: -12.043333,
					lng: -77.028333,
					zoomControl: true,
					zoomControlOpt: {
						style: "SMALL",
						position: "TOP_LEFT"
					},
					panControl: true,
					streetViewControl: false,
					mapTypeControl: false,
					overviewMapControl: false
				});

				map.addStyle({
					styledMapName: "Styled Map",
					styles: $.components.get('gmaps', 'styles'),
					mapTypeId: "map_style"
				});

				map.setStyle("map_style");
			})();
		});
	</script>

@stop
