<?php
require_once("../konek/connect.php");
	$id_pesawat = $_POST['id_pesawat'];
	$nama_pesawat = $_POST['nama_pesawat'];

	//update data /edit
	$query=mysqli_query($con,"update tb_pesawat set nama_pesawat='$nama_pesawat' where id_pesawat='$id_pesawat'");
	if($query){
		echo "<script>alert('Data Berhasil diupdate'); window.location.href = 'listpst.php';</script>";
	}else{
		echo "<script>alert('Gagal update Data'); window.location.href = 'editpst.php';</script>";
		echo mysqli_error();
	}
?>