<!doctype html>
<html lang="en" class="no-js">

<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {

	header('location:./../login.html');
	exit();
}
	
$id = $_SESSION['sess_id'];
// mengambil data berdasarkan id
include '../config.php';
$result = mysqli_query($dbconnect, "SELECT * from users where id_user = '$id'");
foreach ($result as $row){
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Kuesioner - Member</title>

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
			<li><a href="#">Welcome to Member Panel! <?=$_SESSION['nama'];?></a></li>
			<li class="ts-account">
				<a href="#"><img src="assets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="./../logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				
				<li class="ts-label">Main</li>
				<li class="open"><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i>Kuesioner</a>
				<ul>
					<li><a href="aplikasi.php">Kuesioner Aplikasi</a></li>
					<li><a href="umum.php">Pertanyaan Umum</a></li>
					<li><a href="kematangan.php">Pertanyaan Tingkat Kematangan</a></li>
				</ul>
			</li>
				<li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Profile</h2>
						<div class="row">
							<form action="components/user-update.php" method="POST" enctype="multipart/form-data">
								<div class="col-md-9">
									<div class="panel-body">
										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-lg-2 control-label">ID</label>
												<div class="col-lg-10">
														<input type="text" name="id" id="id_user" value="<?php echo $row['id_user']; ?>" class="form-control" readonly>
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Nama</label>
												<div class="col-sm-10">
													<input type="text" name="name" value="<?php echo $row['nama']; ?>" class="form-control" required autocomplete="off">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">No. HP</label>
												<div class="col-sm-10">
													<input type="text" name="hp" value="<?php echo $row['no_hp']; ?>" class="form-control" required autocomplete="off">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
											<label class="col-sm-2 control-label">Alamat</label>
												<div class="col-sm-10">
													<textarea name="alamat" value="" class="form-control" rows="3" required autocomplete="off"><?php echo $row['alamat']; ?></textarea>
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">E-Mail</label>
												<div class="col-sm-10">
													<input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required autocomplete="off">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Username</label>
												<div class="col-sm-10">
													<input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" required autocomplete="off">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Password</label>
												<div class="col-sm-10">
													<input type="password" name="password" value="" class="form-control" placeholder="KOSONGKAN JIKA TIDAK INGIN MENGUBAH PASSWORD" autocomplete="off">
												</div>
											</div>
										</div>	
									</div>
									<div class="modal-footer">
										<button class="btn btn-primary" type="submit">Save Changes</button>
										<button class="btn btn-default" type="button" onclick="window.location.reload()">Reset</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- Loading Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>