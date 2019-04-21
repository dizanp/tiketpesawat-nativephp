<?php
  require_once ("konek/connect.php");
  $username = $_SESSION['username'];
  if (isset($_SESSION['username']) == null ) {
    header('Location: login.php');
  }
    //menampilkan data sesuai username
    $sql= "select * from transaksi where username = '$username' ";
    $query  = mysqli_query($con,$sql);
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
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nama</th>
          <th>No Hp</th>
          <th>Kota asal</th>
          <th>Kota Tujuan</th>
          <th>Id Pesawat</th>
          <th>Tanggal Berangkat</th>
          <th>Tanggal Kembali</th>
          <th>Id Tiket</th>
          <th>Jumlah Orang</th>
          <th>Jumlah Bayi</th>
          <th>Total Harga</th>
        </tr>
      </thead>
       <?php
          while($row  = mysqli_fetch_assoc($query)){ 
        ?>
      <tbody>
        <tr>
           <td><?php echo $row['nama']; ?></td>
           <td><?php echo $row['no_hp']; ?></td>
           <td><?php echo $row['kota_asal']; ?></td>
           <td><?php echo $row['kota_tujuan']; ?></td>
           <td><?php echo $row['id_pesawat']; ?></td>
           <td><?php echo $row['tanggal_berangkat']; ?></td>
           <td><?php echo $row['tanggal_kembali']; ?></td>
           <td><?php echo $row['id_tiket']; ?></td>
           <td><?php echo $row['jumlah']; ?></td>
           <td><?php echo $row['bayi']; ?></td>
           <td><?php echo $row['total_harga']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
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
