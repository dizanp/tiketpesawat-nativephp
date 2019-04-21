// JavaScript Document isi file Nama.js
function Harga(){
 var id_tiket = document.getElementById('id_tiket').value;
 var url = "Harga.php?id_tiket=" +id_tiket;
 ambilData(url, "harga");
}