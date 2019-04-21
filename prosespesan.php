<?php
require_once("konek/connect.php");
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $kota_asal = $_POST['kota_asal'];
  $kota_tujuan = $_POST['kota_tujuan'];
  $id_pesawat = $_POST['id_pesawat'];
  $tanggal_berangkat = $_POST['tanggal_berangkat'];
  $tanggal_kembali = $_POST['tanggal_kembali'];
  $id_tiket = $_POST['id_tiket'];
  $jumlah = $_POST['jumlah'];
  $bayi = $_POST['bayi'];
  $total_harga = $_POST['total_harga'];
  if(!$nama || !$no_hp || !$kota_asal || !$kota_tujuan ||  !$id_pesawat || !$tanggal_berangkat ||  !$id_tiket || !$jumlah ||  !$total_harga){
      echo "<script>alert('Masih ada data Kosong'); window.location.href = 'index.php';</script>";
  }else{
    $simpan = mysqli_query($con,"INSERT INTO transaksi  VALUES(null,'$username','$nama','$no_hp','$kota_asal','$kota_tujuan','$id_pesawat','$tanggal_berangkat','$tanggal_kembali','$id_tiket','$jumlah','$bayi','$total_harga')")or trigger_error(mysqli_error($con)." in ");
    // echo var_dump($simpan);
    // die();
  } if (!$simpan) {
          echo "<script>alert('Maaf gagal pesan'); window.location.href = 'index.php';</script>";
      }else{
        echo "<script>alert('Berhasil Memesan TIket'); window.location.href = 'data.php';</script>";
      }
?>