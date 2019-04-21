<?php
  require_once ("../konek/connect.php");
  $username = $_SESSION['username'];
  $data = mysqli_query($con,"select * from tb_users where username='$username'");
  $hasil = mysqli_fetch_assoc($data);
  if (isset($_SESSION['username']) == null ) {
    header('Location: ../login.php');
  }
  if($hasil["level_akses"] != "admin"){
    header('Location: ../index.php'); 
  }
?>
<!-- file header -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <link rel="stylesheet" href="../css/AdminLTE.min.css">
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../admin/index.php">Dashboard</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo date('d M Y') ?> &nbsp; <a href="logout.php" class="btn btn-danger">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">    
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   <li>
                        <a href="listpst.php"><i class="fa fa-plane fa-3x"></i> Pesawat</a>
                    </li>
                    <li  >
                        <a href="listtiket.php"><i class="fa fa-ticket fa-3x"></i> tiket </a>
                    </li>               
                    <li  >
                        <a href="transaksi.php"><i class="fa fa-money fa-3x"></i> Transaksi</a>
                    </li>     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
