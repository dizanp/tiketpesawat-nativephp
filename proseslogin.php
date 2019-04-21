<?php
require_once("konek/connect.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	//cek data
	$data = mysqli_query($con,"select * from tb_users where username='$username' and 
		password='$password'");
	$jumlah = mysqli_num_rows($data);
	$hasil = mysqli_fetch_assoc($data);
	//cek user sudah ada
	if($jumlah == 0) {
		echo "<script>alert('User belum terdaftar'); window.location.href = 'index.php';</script>";
	} else {
		//cek password salah
		if($password <> $hasil['password']) {
			echo "Password Salah!<br/>";
			echo "<a href='login.php'>Back</a>";
		} else {
			if($hasil["level_akses"] == "admin"){
			$_SESSION['username'] = $hasil['username'];
			 echo "<script>alert('Login Berhasil sebagai admin'); window.location.href = 'admin/index.php';</script>";
			}else{
				$_SESSION['username'] = $hasil['username'];
			 echo "<script>alert('Login Berhasil'); window.location.href = 'index.php';</script>";
			}
		}
	}
?>