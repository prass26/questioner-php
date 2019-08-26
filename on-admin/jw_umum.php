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
						<h2 class="page-title">Data Jawaban</h2>
						<div class="row">
						<!-- Table -->
						<div class="panel panel-default">
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ID User</th>
											<th>Nama User</th>
											<th>Tanggal Upload</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID User</th>
											<th>Nama User</th>
											<th>Tanggal Upload</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>

									<?php
									include '../config.php';
									$result = mysqli_query($dbconnect, "SELECT id_user, nama, tgl_input, COUNT(*) FROM j_umum GROUP BY id_user HAVING (COUNT(id_user)>1)");
									foreach ($result as $row){
										echo "<tr>";
										echo "<td>".$row['id_user']."</td>";
										echo "<td>".$row['nama']."</td>";
										echo "<td>".$row['tgl_input']."</td>";
										echo "<td><a href='detail_umum.php?id=".$row['id_user']."'><b>Detail<b></a></td>";
										echo "</tr>";
									}
									?>
									</tbody>
								</table>
								
								<!-- Mengatasi masalah scroll saat memanggil 2 modal -->
								<style>
									#modalEdit { overflow-y:scroll }
									#modalDelete { overflow-y:scroll }
								</style>
								
								<!-- Modal Add -->
								<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="User">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="User">Add Data</h4>
											</div>
											<form class="tagForm" id="tag-form" action="components/kos/save.php" method="POST" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="fetched-data"></div>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary" type="submit">Save</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Modal Detail -->
								<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="User">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="User">Detail</h4>
											</div>
											<form class="tagForm" id="tag-form" action="" method="POST" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="fetched-data"></div>
												</div>
												<div class="modal-footer">
													<a class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalEdit">Edit</a>
													<a class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#modalDelete">Delete</a>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Modal Edit -->
								<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="User">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="User">Edit Data</h4>
											</div>
											<form class="tagForm" id="tag-form" action="components/kos/update.php" method="POST" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="fetched-data"></div>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary" type="submit">Save changes</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Modal Delete -->
								<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="User">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="User">Delete Data</h4>
											</div>
											<form class="tagForm" id="tag-form" action="components/kos/delete.php" method="POST" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="fetched-data"></div>
												</div>
												<div class="modal-footer">
													<button class="btn btn-danger" type="submit">Delete</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
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
	<script type="text/javascript">
	var id_t;
	$(document).ready(function(){
        $('#modalAdd').on('show.bs.modal', function (e) {
        	//menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                url : 'modal-kos-add.php',
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    $(document).ready(function(){
        $('#modalDetail').on('show.bs.modal', function (e) {
        	var id_tempat = $(e.relatedTarget).data('id');
        	id_t = id_tempat;
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
            	type : 'post',
                url : 'modal-kos-detail.php',
                data :  'id_tempat='+ id_tempat,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    $(document).ready(function(){
        $('#modalEdit').on('show.bs.modal', function (e) {
        	//menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
            	type : 'post',
                url : 'modal-kos-edit.php',
                data :  'id_tempat='+ id_t,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    $(document).ready(function(){
        $('#modalDelete').on('show.bs.modal', function (e) {
        	//menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
            	type : 'post',
                url : 'modal-kos-hapus.php',
                data :  'id_tempat='+ id_t,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
	</script>

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