 <?php 
    require_once("../konek/connect.php");
    require_once ("header.php");
 ?>
        <div id="page-wrapper" >
            <?php
                $id_tiket = $_GET['id_tiket'];
                $query = mysqli_query($con,"select * from tb_tiket where id_tiket = '$id_tiket'");
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
                            <h5>Edit Data Tiket</h5>
                        </div>  
                        <div class="panel-body">
                            <?php
                                while($row  = mysqli_fetch_assoc($query)){ 
                            ?>
                            <form action="updatetiket.php" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Id Tiket</label>
                                    <input type="text" name="id_tiket" class="form-control" value="<?php echo $row['id_tiket']; ?>" required readonly>
                                </div>
                                <div class="form-group">
                                    <label >Kelas Tiket</label>
                                    <input type="text" name="kelas_tiket" class="form-control" value="<?php echo $row['kelas_tiket']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label >Harga</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>" >
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Update Data">
                                </div>
                            </div>
                            </form> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>                            
                <!-- /. ROW  -->
<?php require_once 'footer.php'; ?>