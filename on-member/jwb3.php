<?php
// Include / load file koneksi.php
include("../config.php");

// Ambil data yang dikirim dari form
$id_jawab = NULL;
$id_quest = $_POST['id'];
$id_user  = $_POST['id_user'];
// $jawab = $_POST['jawaban'];
$jmlh = $_POST['jumlah'];
$tanggal = date("Y-m-d");

// Proses simpan ke Database
$query =  "INSERT INTO jawaban_kematangan (id_quest,jawaban,id_user,tgl_input) VALUES";

foreach ($id_quest as $id_q) {
	$asd = "jawaban".$id_q;
	$jawab = $_POST[$asd];
	//echo $jawab[0]."<br>";
	$query .="('".$id_q."','".$jawab[0]."','".$id_user[0]."','".$tanggal."'),";
}

$query = substr($query, 0, strlen($query) - 1).";";

// Eksekusi $query
$stmt = $dbconnect->prepare($query);
$stmt->execute();
// Buat sebuah alert sukses, dan redirect ke halaman awal (index.php)
header('location:./../logout.php');
?>

