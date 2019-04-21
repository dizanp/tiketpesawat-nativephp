<?php
require_once("../konek/connect.php");
	$id_tiket = $_POST['id_tiket'];
	$kelas_tiket = $_POST['kelas_tiket'];
	$harga = $_POST['harga'];

	$query=mysqli_query($con,"update tb_tiket set kelas_tiket='$kelas_tiket', harga='$harga' where id_tiket='$id_tiket'");
	if($query){
		echo "<script>alert('Data Berhasil diupdate'); window.location.href = 'listtiket.php';</script>";
	}else{
		echo "<script>alert('Gagal update Data'); window.location.href = 'edittiket.php';</script>";
		echo mysqli_error();
	}
?>