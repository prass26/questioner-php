<?php
	session_start();
	/**
	 * Jika Tidak login atau sudah login tapi bukan sebagai admin
	 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
	 */
	if ( !isset($_SESSION['user_login']) || 
	    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {

		header('location:./../../../index.html');
		exit();
	}
	
	include '../config.php';

if(isset($_POST['submit'])):
	//membuat session array dengan variabel - variabel POST
	$_SESSION['pos']=$_POST;
endif;

if(isset($_SESSION['pos'])):
	$jawaban   =$_SESSION['pos']['jawaban'];
else:
	$jawaban   ='';
endif;

	$id_quest		= $_POST["id"];
	$id_user		= $_POST["id_user"];
	$jawaban		= $_POST["jawaban"];
	$tanggal		= date("Y-m-d");


		$result = mysqli_query($dbconnect, "INSERT INTO `jawaban_kematangan` (`id_jawaban`, `id_quest`, `jawaban`, `id_user`, `tgl_input`) VALUES (NULL, '$id_quest', '$jawaban', '$id_user', '$tanggal')");
		if ($result){
			echo '<script language="javascript">alert("Data Berhasil disimpan")</script>';
			session_destroy();
			header("Location:../index.html");
			} else {
				echo '<script language="javascript">alert("Data gagal disimpan")</script>';
				header("Location:../on-member/kematangan.php");
				}

?>