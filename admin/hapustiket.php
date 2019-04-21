<?php
require_once("../konek/connect.php");
$id_tiket = $_GET['id_tiket'];
$sql=mysqli_query($con,"delete from tb_tiket where id_tiket='$id_tiket'");
if($sql){
	 echo "<script>alert('Data Berhasil dihapus'); window.location.href = 'listtiket.php';</script>";
}else{
	echo "<script>alert('Gagal hapus data'); window.location.href = 'listtiket.php';</script>";
}
?>