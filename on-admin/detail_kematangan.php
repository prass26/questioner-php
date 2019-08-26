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

	header('location:./../index.html');
	exit();
}
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Kuesioner - Admin Data Jawaban</title>

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
						<h2 class="page-title">Data Jawaban Kuesioner Tingkat Kematangan</h2>
						<div class="row">
						<!-- Table -->
						<div class="panel panel-default">
							<div class="panel-body">

									<?php
									include '../config.php';
									$id = $_GET['id'];
									$query = mysqli_query($dbconnect, "SELECT * FROM j_kematangan WHERE id_user=$id");
									$jumlah=mysqli_num_rows($query);
									$urut=0;
									while($user=mysqli_fetch_array($query)){
											$id_user=$user['id_user'];
											$id=$user['id_quest'];
											$pertanyaan=$user['pertanyaan'];
											$jawaban=$user['jawaban'];
											$tgl=$user['tgl_input'];
									?>
<div class="panel panel-default">
								<div class="panel-body">
									<form method="get" action="cetak_kematangan.php">
                                    
                                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
											<tr>

            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <input type="hidden" name="id_user" value=<?php echo $id_user; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="2"><font size="4"><b><?php echo $urut=$urut+1; ?></b></font></td>
                  <td height="auto" width="auto"><font size="4"><b><?php echo "$pertanyaan"; ?></b></font></td>
            <tr>
            	<td></td>
               <td height="auto" width="auto"><font size="4"><?php echo "$jawaban"; ?></font></td>
            </tr>
                
        <?php
        }
        ?>
            <tr>
                <td>&nbsp;</td>
                  <td><input type="submit" name="submit" value="Cetak"></td>
            </tr>								 
			</table>
		</form>
								
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

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	

	<!-- Loading Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/chartData.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>