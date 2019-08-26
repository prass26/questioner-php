<?php
  require 'config.php';

  if ( isset($_POST['username']) && isset($_POST['password'])) {
    $nama           = $_POST['nama'];
    $no_hp          = $_POST['hp'];
    $alamat         = $_POST['alamat'];
    $email          = $_POST['email'];
    $jenis_kelamin  = $_POST['gender'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $querytambah    = mysqli_query($dbconnect, "INSERT INTO users VALUES(NULL, '$nama', '$no_hp', '$alamat', '$email', '$jenis_kelamin', '$username', md5('$password'), 'member')") or die(mysqli_error());
    if($querytambah) {
      echo "<script> alert('Data telah disimpan');
      window.location.href='login.html'; </script>";
    } else {
      header('location:login.html');
    }
  } else {
      header('location:login.html');
    exit();
  }
?>