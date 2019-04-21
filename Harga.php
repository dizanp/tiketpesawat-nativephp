<?php
require_once('konek/connect.php');
 $id_tiket =$_GET['id_tiket'];
 $sql =mysqli_query($con,"select harga from tb_tiket where  id_tiket ='$id_tiket'");
 $row =mysqli_fetch_assoc($sql);
 echo $row['harga'];
?>