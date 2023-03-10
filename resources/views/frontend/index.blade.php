<!DOCTYPE html>
<html>

<head>
	<title>Mticket.asia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="{{ url('assets/img/icon.png') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link rel="stylesheet" href="{{ url('theme/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/bootstrap-slider.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/jquery.scrolling-tabs.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/bootstrap-checkbox.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/featherlight.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/bootstrap.offcanvas.min.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/core.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('theme/css/responsive.css') }}">
	<style>
		.section-calendar-events .section-content .tab-content ul li {
			width: 30.333%;
			float: left;
			position: relative;
			height: 235px;
			position: relative;
			margin: 10px;
		}
	</style>
</head>

<body>
	<header id="masthead" class="site-header fix-header header-3">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="top-left">
						<ul>
							<li>
								<a href="tel:02122302193">
									<i class="fa fa-phone"></i>
									021-22302193
								</a>
							</li>
							<li>
								<a href="mailto:hello@myticket.com">
									<i class="fa fa-envelope-o"></i>
									info@mticket.asia
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="site-branding col-md-3">
						<h1 class="site-title"><a href="{{ url('/') }}" title="myticket" rel="home"><img src="{{ url('assets/img/logo-white.png')}}" alt="logo"></a></h1>
					</div>

					<div class="col-md-9">
						<nav id="site-navigation" class="navbar">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
								<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
									<i class="fa fa-times fa-2x" aria-hidden="true"></i>
								</button>

								<ul class="nav navbar-nav navbar-right">
									<li><a href="{{ url('event') }}">Seminar</a></li>
									<li><a href="{{ url('event/philiphine') }}">Philiphine</a></li>
									<li><a href="{{ url('search-invoice') }}" class="primary-link" style="background: #fff; color: #222; border: 1px solid #fff"><i class="fa fa-search"></i> Search Invoice</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="hero-2">
		<div class="container">
			<div class="row">
				<div class="hero-content">
					<p class="hero-caption">TICKETING <span>FLATFORM</span></p>
					<h1 class="hero-title">Cari Eventmu Sekarang!</h1>
					<ul class="count-down"></ul>
					<div class="hero-location">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> Indonesia | Philippines | Thailand</p>
					</div>
					<div class="hero-purchase-ticket">
						<a href="{{ url('event') }}">VIEW EVENTS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section-refine-search">
		<div class="container">
			<div class="row">
				<form action="{{ url('search') }}" method="GET">
					<div class="keyword col-sm-6 col-md-6">
						<label>Search Keyword</label>
						<input type="text" name="q" class="form-control hasclear" placeholder="Search">
						<span class="clearer"><img src="images/clear.png" alt="clear"></span>
					</div>
					<div class="location col-sm-6 col-md-4">
						<label>City</label>
						<select name="city_id" class="selectpicker dropdown">
							@foreach ($city as $c)
							<option value="{{ $c['source_id'] }}">{{ $c['city'] }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-sm-6 col-md-2">
						<input type="submit" value="Search">
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="section-calendar-events">
		<div class="container">
			<div class="row">
				<div class="section-content">
					<div class="tab-content">
						<ul class="clearfix">
							@foreach ($event as $e)
							<li>
								<a href="{{ url('event',$e->type) }}/{{ $e->id }}">
									<div class="date">
										<span class="day">{{ date('j', strtotime($e->event_date)) }}</span>
										<span class="month">{{ date('M', strtotime($e->event_date)) }}</span>
										<span class="year">{{ date('Y', strtotime($e->event_date)) }}</span>
									</div>
									<img src="{{ $e->image }}" alt="image">
									<div class="info">
										<p>{{ $e->title }} <span>IDR {{ number_format($e->price, 0) }}</span></p>
										<a href="{{ url('event',$e->type) }}/{{ $e->id }}" class="get-ticket">Sign Up</a>
									</div>
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="colophon" class="site-footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">

					<div class="col-md-8">
						<a href="{{ url('/') }}"><img src="{{ url('assets/img/logo-white.png') }}" alt="logo"></a>
					</div>
					<div class="col-sm-4 col-md-4">

						<p>&copy; 2019 MTICKET.ASIA. ALL RIGHTS RESEVED</p>
					</div>
				</div>

			</div>
		</div>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="footer-1 col-md-9">
						<div class="social clearfix">
							<h3>Stay Connected</h3>
							<ul>
								<li class="facebook">
									<a href="#">
										<i class="fa fa-facebook" aria-hidden="true"></i>
										Facebook
									</a>
								</li>
								<li class="linkedin">
									<a href="#">
										<i class="fa fa-instagram" aria-hidden="true"></i>
										Instagram
									</a>
								</li>
								<li class="google">
									<a href="#">
										<i class="fa fa-youtube" aria-hidden="true"></i>
										Youtube
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-2 col-md-3">
						<div class="footer-dashboard">
							<ul>
								<li><a href="{{ url('about-us') }}">About Us</a></li>
								<li><a href="{{ url('terms-condition') }}">Terms & Condition</a></li>
								<li><a href="{{ url('refund-policy') }}">Refund Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{ url('theme/js/jquery-3.2.0.min.js') }}"></script>
	<script src="{{ url('theme/js/bootstrap-slider.min.js') }}"></script>
	<script src="{{ url('theme/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ url('theme/js/jquery.scrolling-tabs.min.js') }}"></script>
	<script src="{{ url('theme/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ url('theme/js/jquery.flexslider-min.js') }}"></script>
	<script src="{{ url('theme/js/jquery.imagemapster.min.js') }}"></script>
	<script src="{{ url('theme/js/tooltip.js') }}"></script>
	<script src="{{ url('theme/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('theme/js/featherlight.min.js') }}"></script>
	<script src="{{ url('theme/js/featherlight.gallery.min.js') }}"></script>
	<script src="{{ url('theme/js/bootstrap.offcanvas.min.js') }}"></script>
	<script src="{{ url('theme/js/main.js') }}"></script>
</body>

</html>