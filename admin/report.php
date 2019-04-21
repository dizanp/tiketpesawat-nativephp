<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
require('../konek/connect.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',12);
// mencetak string 
$pdf->Cell(190,7,'Pemesanan Tiket Pesawat',0,1,'C');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(190,7,'Data Transaksi',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Username',1,0);
$pdf->Cell(20,6,'Nama',1,0);
$pdf->Cell(25,6,'No Hp',1,0);
$pdf->Cell(20,6,'Kota Asal',1,0);
$pdf->Cell(25,6,'Kota Tujuan',1,0);
$pdf->Cell(20,6,'Id Pesawat',1,0);
$pdf->Cell(35,6,'Tanggal Berangkat',1,0);
$pdf->Cell(35,6,'Tanggal Kembali',1,0);
$pdf->Cell(20,6,'Id Tiket',1,0);
$pdf->Cell(20,6,'Jumlah',1,0);
$pdf->Cell(20,6,'Bayi',1,0);
$pdf->Cell(22,6,'Total Harga',1,1);

$pdf->SetFont('Arial','',10);

$transaksi = mysqli_query($con,"select * from transaksi");
while ($row = mysqli_fetch_assoc($transaksi)){
    $pdf->Cell(20,6,$row['username'],1,0);
    $pdf->Cell(20,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['no_hp'],1,0);
    $pdf->Cell(20,6,$row['kota_asal'],1,0);
    $pdf->Cell(25,6,$row['kota_tujuan'],1,0);
    $pdf->Cell(20,6,$row['id_pesawat'],1,0);
    $pdf->Cell(35,6,$row['tanggal_berangkat'],1,0);
    $pdf->Cell(35,6,$row['tanggal_kembali'],1,0);
    $pdf->Cell(20,6,$row['id_tiket'],1,0);
    $pdf->Cell(20,6,$row['jumlah'],1,0);
    $pdf->Cell(20,6,$row['bayi'],1,0);
    $pdf->Cell(22,6,$row['total_harga'],1,1); 
}

$pdf->Output();
?>