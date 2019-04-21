<?php
require_once("konek/connect.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	//mengecek username sama atau tidak
	$data = mysqli_query($con,"select * from tb_users where username='$username'");
	$jumlah = mysqli_num_rows($data);
	$hasil = mysqli_fetch_assoc($data);
	if ($jumlah > 0){
  		echo "<script>alert('Username ada yang sama'); window.location.href = 'register.php';</script>";
	}else{
		$sql = mysqli_query($con,"INSERT INTO tb_users(username,password,level_akses)VALUES('$_POST[username]','$_POST[password]','user')");
		if($sql){
			echo "<script>alert('Register Berhasil'); window.location.href = 'index.php';</script>";
		}else{
			die();
			echo "<script>alert('Ada kesalahan'); window.location.href = 'register.php';</script>";
		}
	}