<?php 
session_start();
error_reporting(10);
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$level = "user";
$kirim = $_POST['submit'];

if(isset($kirim)){
    
	
		include "koneksi.php";

		$query = "INSERT INTO tb_user (username, password, email, level) VALUES('$username', '$password', '$email', '$level')";
		$hasil = mysqli_query($koneksi,$query);

		if(!$hasil){
			echo "<script>alert('username telah digunakan')</script>";
		} else {
			echo "<script>alert('Berhasil Terdaftar')</script>";
			header('location : home.php');
		}

	} 

?>