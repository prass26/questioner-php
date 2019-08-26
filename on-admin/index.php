<!doctype html>
<html lang="en" class="no-js">

<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.html');
	exit();
}
	include '../config.php';

	//Menghitung Total User
	$totaluser = mysqli_query($dbconnect, "SELECT COUNT(*) as total FROM users");
	$res = mysqli_fetch_array($totaluser);
	$user = $res ['total'];

	$totaltanya = mysqli_query($dbconnect, "SELECT COUNT(*) as total FROM pertanyaan");
	$res = mysqli_fetch_array($totaltanya);
	$tanya = $res ['total'];


?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Kuesioner - Admin</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="index.php" class="logo"><img src="assets/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Welcome to Admin Panel! <?=$_SESSION['nama'];?></a></li>
			<li class="ts-account">
				<a href="#"><img src="assets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="./../logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				
				<li class="ts-label">Main</li>
				<li class="open"><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				<li><a href="user.php"><i class="fa fa-users"></i>Users</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i>Data Pertanyaan</a>
					<ul>
					<li><a href="dt_aplikasi.php">Kuesioner Aplikasi</a></li>
					<li><a href="dt_umum.php">Pertanyaan Umum</a></li>
					<li><a href="dt_kematangan.php">Pertanyaan Tingkat Kematangan</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-desktop"></i>Data Jawaban</a>
					<ul>
					<li><a href="jw_aplikasi.php">Kuesioner Aplikasi</a></li>
					<li><a href="jw_umum.php">Pertanyaan Umum</a></li>
					<li><a href="jw_kematangan.php">Pertanyaan Tingkat Kematangan</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Data</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<ul class="chart-dot-list">
													<li class="a1">Pertanyaan</li>
													<li class="a2">Jawaban</li>
												</ul>
											</div>
											<div class="col-md-8">
												<div class="chart chart-doughnut">
													<canvas id="chart-area4" width="1200" height="900" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-default">
												<div class="panel-body bk-primary text-light">
													<div class="stat-panel text-center">
														<div class="stat-panel-number h1 "><?php echo $user ?></div>
														<div class="stat-panel-title text-uppercase">Users</div>
													</div>
												</div>
												<a href="user.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="col-md-5">
											<div class="panel panel-default">
												<div class="panel-body bk-success text-light">
													<div class="stat-panel text-center">
														<div class="stat-panel-number h1 "><?php echo $tanya ?></div>
														<div class="stat-panel-title text-uppercase">Data Soal</div>
													</div>
												</div>
												<a href="pertanyaan.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/main.js"></script>
	
	<script>
	var doughnutData = [
	    {
	        value: <?php echo $user ?>,
	        color:"#2ECC71",
	        highlight: "#87D37C",
	        label: "User"
	    },
	    {
	        value: <?php echo $tanya ?>,
	        color: "#46BFBD",
	        highlight: "#5AD3D1",
	        label: "Tanya"
	    },
	    {
	        value: <?php echo $jawaban ?>,
	        color: "#FDB45C",
	        highlight: "#FFC870",
	        label: "Jawaban"
	    }
	]


	window.onload = function(){

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>

</html>