 <?php 
    require_once ('header.php'); 
 ?>
 <?php
    require_once('../konek/connect.php');
    $sql= 'select * from transaksi';
    $query  = mysqli_query($con,$sql); 
 ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Transaksi</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>No Hp</th>
                                            <th>Kota Asal</th>
                                            <th>Kota Tujuan</th>
                                            <th>Id Pesawat</th>
                                            <th>Tanggal Berangkat</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Id tiket</th>
                                            <th>Jumlah Orang</th>
                                            <th>Bayi</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <?php
                                            while($row  = mysqli_fetch_assoc($query)){ 
                                    ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
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
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                                <div class="col-md-2">
                                <form method=post action=report.php><input type="submit" name="submit"value="Laporan transaksi" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </div>                            
                <!-- /. ROW  -->
<?php require_once 'footer.php'; ?>