<?php
  require_once ("konek/connect.php");
  $username = $_SESSION['username'];
  if (isset($_SESSION['username']) == null ) {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Menu User</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/Harga.js"></script>
    <script type="text/javascript" src="js/Plus.js"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Form Pemesanan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Pesan</a></li>
            <li><a href="data.php">Data</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
      <div class="row">
        <form action="prosespesan.php" method="post">
        <div class="col-md-12">
            <div class="col-md-4">
              <div class="form-group">
                <label>Isi Data diri anda</label><br>
                  <img src="images/regist.png" alt="image" width="300px"height="200px"><br><br>
                  <label>*Wajib diisi</label><br>
              </div>
              <div class="form-group">
                <label>Username</label><br>
                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" required readonly><br>
                <label>Nama*</label><br>
                <input type="text" name="nama" placeholder="Nama" class="form-control">
              </div>
              <div class="form-group">
                <label>No Hp*</label><br>
                <input type="text" name="no_hp" placeholder="No Hp" class="form-control">
              </div>
                <div class="form-group">
              <label>Kota Asal*</label><br>
              <input type="text" name="kota_asal"  placeholder="Kota Asal"class="form-control">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tiket*</label><br>
              <img src="images/pesawat.jpg" alt="image" width="300px" height="200px"><br><br>
              <label>*Wajib di isi</label><br>
            </div>
            <div class="form-group">
              <label>Kota Tujuan*</label><br>
              <input type="text" name="kota_tujuan" placeholder="Kota Tujuan" class="form-control">
            </div>
            <div class="form-group">
              <label> Nama Pesawat*</label>
              <select name="id_pesawat" id="id_pesawat" class="form-control">
                <option value=""></option>
                <!-- mengambil nilai combo box dari database -->
                 <?php
                 $query=mysqli_query ($con,"select id_pesawat,nama_pesawat from tb_pesawat");
                 while($data2=mysqli_fetch_assoc($query))
               {
                if($data1==$data2[IdPesawat])
                 echo"<option value=$data2[id_pesawat] selected>$data2[nama_pesawat]</option>";
                 else echo"<option value=$data2[id_pesawat]>$data2[nama_pesawat]</option>"; 
                 }
               ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Berangkat*</label>
                <input type="date" name="tanggal_berangkat" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
            <label> Kelas Tiket*</label>
              <!-- Membuat even onchane untuk memanggil ajax di tabel lain -->
              <select name="id_tiket" id="id_tiket" onchange="Harga()" class="form-control">
                <option value=""></option>
                 <?php
                 $query=mysqli_query ($con,"select id_tiket,kelas_tiket from tb_tiket");
                 while($data2=mysqli_fetch_assoc($query))
               {
                if($data1==$data2[IdTiket])
                 echo"<option value=$data2[id_tiket] selected>$data2[kelas_tiket]</option>";
                 else echo"<option value=$data2[id_tiket]>$data2[kelas_tiket]</option>"; 
                 }
               ?> 
                </select><br>
              <label>Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" required readonly>
            </div>
            <div class="form-group">
              <label> Jumlah Orang*</label>
              <input type="text" name="jumlah" id="jumlah" class="form-control">
            </div>
             <div class="form-group">
              <label> Jumlah Bayi*</label>
              <input type="text" name="bayi" id="bayi" class="form-control" onkeyup="Plus();">
            </div>
            <div class="form-group">
              <label> Total Harga*</label>
              <input type="text" name="total_harga" id="total_harga" class="form-control" required readonly>
            </div>
          </div>
          <input type="submit" class="btn btn-success" name="submit" value="Pesan">
        </div>
      </form>
    </div>

    
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
