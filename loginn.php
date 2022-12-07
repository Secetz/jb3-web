<?php
session_start();
error_reporting(10);
include "koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];

$kirim = $_POST['submit'];
if(isset($kirim)){
	if(empty($username) && empty($pass)){
		echo "";
}
}

$query = "SELECT * FROM tb_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($hasil);



if(isset($kirim)){
	if($pass == $data['password']){
		
		$_SESSION['level'] = $data['level'];
		$_SESSION['username'] = $data['username'];
		echo "Login berhasil";
		header('Location:home.php');
		exit;
	} else {
		echo "<script>alert('login gagal')</script>";;
	}
}
?>