<?php
session_start();
require 'config.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama, 
                         level_user, 
                         id_user 
                  FROM users 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = md5( $_POST['password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $level_user, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['nama']       = $nama;
            
        }

        $check_log->close();

        header('location:on-'.$level_user);
        exit();

    } else {
        echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>";        
        
        exit();
    }

   
} else {
    header('location:index.html');
    exit();
}