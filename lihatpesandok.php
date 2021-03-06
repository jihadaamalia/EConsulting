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
					<li><a href="index.php">Home</a></li>
					<li><a href="consul.php" >Konsultasi</a></li>
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
							<h3 class="light white">E-Consulting</h3>
							<h1 class="white typed">Memudahkan Anda Dalam Berkonsultasi.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section class="section section-padded">
		
	<div class="container">
		<div class="row col-md-3"></div>
		<div class="row col-md-8">
			<center><h2>Lihat Pesan</h2></center><br><br>
			<form>
				<?php
					$_SESSION['lihat_id']= $_GET['id'];
					
					$dokter = mysql_query("SELECT * FROM pesan_dokter WHERE ID_pesandokter='".$_SESSION['lihat_id']."'"); //mengambil data dari database
					$col=mysql_fetch_array($dokter);
					
				?>
				<table class="table">
					<tr>
			            <td>ID Pesan</td>
			            <td><?php echo $col['ID_pesandokter'];?></td>
			        </tr>
			        <tr>
			            <td>ID Pasien</td>
			            <td><?php echo $col['ID_pas'];?></td>
		            </tr>
		            <tr>
			            <td>Nama Dokter</td>
			            <td><?php echo $col['nama_dok'];?></td>
			        </tr>
			        <tr>
			            <td>Tanggal Pesan</td>
			            <td><?php echo $col['tgl_pesan'];?></td>
			        </tr>
			       	<tr>
			            <td>Tanggal Kunjungan</td>
			            <td><?php echo $col['tgl_kunjungan'];?></td>
			        </tr>
			        <tr>
			            <td>Judul</td>
			            <td><?php echo $col['judul'];?></td>
			        </tr>
			        <tr>
			            <td>Lihat Pesan</td>
			            <td><?php echo $col['pesan'];?></td>
			        </tr>
			    </table>
			</form>
		</div>
	</div>
	<br><br>
		<center><a href="riwayatdokter.php" class="btn btn-blue" <?php if(empty($_SESSION['status'])) {echo 'style="display:none;"'; } ?>>Kembali ke halaman sebelumnya</a>
			<a href="riwayat.php" class="btn btn-blue" <?php if(!empty($_SESSION['status'])) {echo 'style="display:none;"'; } ?>>Kembali ke halaman sebelumnya</a></center>
	</section>
			
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>
</html>