<?php
require_once("../konek/connect.php");
  $id_pesawat = $_POST['id_pesawat'];
  $nama_pesawat = $_POST['nama_pesawat'];
      //validasi data kosong
      if(!$id_pesawat || !$nama_pesawat ){
         echo "<script>alert('Masih ada data Kosong'); window.location.href = 'tambahpst.php';</script>";
      }else{
          //menambahkan data ke database
          $simpan = mysqli_query($con,"INSERT INTO tb_pesawat VALUES('$id_pesawat','$nama_pesawat')");
      }
      if (!$simpan) {
          echo "<script>alert('Maaf gagal menambah data'); window.location.href = 'tambahpst.php';</script>";
      }else{
        echo "<script>alert('Data Berhasil ditambah'); window.location.href = 'listpst.php';</script>";
      }
?>