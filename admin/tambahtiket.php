 <?php 
    require_once("../konek/connect.php");
    require_once ("header.php");
 ?>
        <div id="page-wrapper" >
            <!-- autonumber -->
            <?php
                $carikode = mysqli_query($con, "SELECT id_tiket from tb_tiket") or die (mysqli_error());
              // menjadikannya array
              $datakode = mysqli_fetch_array($carikode);
              $jumlah_data = mysqli_num_rows($carikode);
              // jika $datakode
              if ($datakode) {
               // membuat variabel baru untuk mengambil kode barang mulai dari 1
               $nilaikode = substr($jumlah_data[0], 1);
               // menjadikan $nilaikode ( int )
               $kode = (int) $nilaikode;
               // setiap $kode di tambah 1
               $kode = $jumlah_data + 1;
               // hasil untuk menambahkan kode 
               // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
               // atau angka sebelum $kode
               $kode_otomatis = "TCT".str_pad($kode, 4, "0", STR_PAD_LEFT);
              } else {
               $kode_otomatis = "TCT0001";
              } 
             ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Tiket</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Tambah Data Tiket</h5>
                        </div>  
                        <div class="panel-body">
                            <form action="prosestambahtiket.php" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Id Tiket</label>
                                    <input type="text" name="id_tiket" class="form-control" value="<?php echo $kode_otomatis; ?>">
                                </div>
                                <div class="form-group">
                                    <label >Kelas Tiket</label>
                                    <input type="text" name="kelas_tiket" class="form-control" placeholder="Kelas tiket">
                                </div>
                                <div class="form-group">
                                    <label >Harga</label>
                                    <input type="text" name="harga" class="form-control" placeholder="Harga">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
                                </div>
                            </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                    
                <!-- /. ROW  -->
<?php require_once 'footer.php'; ?>