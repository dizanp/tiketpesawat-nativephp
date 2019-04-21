<?php
require_once("../konek/connect.php");
$id_pesawat = $_GET['id_pesawat'];
//menghapus dari database
$sql=mysqli_query($con,"delete from tb_pesawat where id_pesawat='$id_pesawat'");
if($sql){
	 echo "<script>alert('Data Berhasil dihapus'); window.location.href = 'listpst.php';</script>";
}else{
	echo "<script>alert('Gagal hapus data'); window.location.href = 'listpst.php';</script>";
}
?>