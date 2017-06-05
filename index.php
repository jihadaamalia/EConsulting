<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$koneksi = mysql_connect('localhost','root','');
$database = mysql_select_db('consulting');
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RS : Sehat Selalu</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Home</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue" <?php if(isset($_SESSION['identitas']) && !empty($_SESSION['identitas'])) {echo 'style="display:none;"'; } ?>>Login</a></li>
					<li><a href="logout.php" class="btn btn-blue" <?php if(!isset($_SESSION['identitas']) && empty($_SESSION['identitas'])) {echo 'style="display:none;"'; } ?>>Logout</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">RS ONLINE</h3>
							<h1 class="white typed">Membantu pasien dalam mendapatkan pelayanan terbaik.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Layanan Kami</h2>
				<h4 class="light muted">Berikut ini merupakan layanan yang akan memfasilitasi pelanggan rumah sakit</h4>
			</div>
			<div class="row services">
				<div class="col-md-12">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">E-Consulting</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.<br><br>
							<!--TOMBOL KHUSUS PASIEN-->
							<a href="consul.php" class="btn btn-blue" <?php if(!isset($_SESSION['identitas']) || empty($_SESSION['identitas']) || isset($_SESSION['status'])) {echo 'style="display:none;"'; } ?> >konsultasi</a>
							<!--TOMBOL KHUSUS DOKTER-->
							<a href="riwayatdokter.php" class="btn btn-blue" <?php if(!isset($_SESSION['identitas']) || empty($_SESSION['identitas']) || !isset($_SESSION['status'])) {echo 'style="display:none;"'; } ?> >konsultasi</a></p>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<!--FORM LOGIN-->
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Login</h3>
				<form action="connect.php" class="popup-form" method= "POST">
					<input type="text" name="id" class="form-control form-white" placeholder="ID">
					<input type="password" class="form-control form-white" name="password" placeholder="Password">
					<button type="submit" class="btn btn-submit">Login</button>
					<h6 class="white">Bukan pasien ? Login <u><b><a href="logindokter.php" class="white">disini</a></b></u></h6>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Konsultasikanlah Masalah Penyakit Anda Yang Tak Kunjung Sembuh</h3>
					<h5 class="light regular light-white">You Share, We Care</h5>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Consultation Active Hours<span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 17:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">9:00 - 15:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2016 TIREG DEVELOPER</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li><a href="www.google.co.id"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
