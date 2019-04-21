<?php
require_once("../konek/connect.php");
  $id_tiket = $_POST['id_tiket'];
  $kelas_tiket = $_POST['kelas_tiket'];
  $harga = $_POST['harga'];
      if(!$id_tiket || !$kelas_tiket || !$harga ){
         echo "<script>alert('Masih ada data Kosong'); window.location.href = 'tambahtiket.php';</script>";
      }else{
          $simpan = mysqli_query($con,"INSERT INTO tb_tiket VALUES('$id_tiket','$kelas_tiket','$harga')");
      }
      if (!$simpan) {
          echo "<script>alert('Maaf gagal menambah data'); window.location.href = 'tambahpst.php';</script>";
      }else{
        echo "<script>alert('Data Berhasil ditambah'); window.location.href = 'listtiket.php';</script>";
      }
?>