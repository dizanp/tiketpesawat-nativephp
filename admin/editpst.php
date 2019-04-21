 <?php 
    require_once("../konek/connect.php");
    require_once ("header.php");
 ?>
        <div id="page-wrapper" >
            <?php
                $id_pesawat = $_GET['id_pesawat'];
                $query = mysqli_query($con,"select * from tb_pesawat where id_pesawat = '$id_pesawat'");
            ?>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabel Pesawat</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Edit Data Pesawat</h5>
                        </div>  
                        <div class="panel-body">
                            <?php
                                while($row  = mysqli_fetch_assoc($query)){ 
                            ?>
                            <form action="updatepst.php" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Id Pesawat</label>
                                    <input type="text" name="id_pesawat" class="form-control" value="<?php echo $row['id_pesawat']; ?>" required readonly>
                                </div>
                                <div class="form-group">
                                    <label >Nama Pesawat</label>
                                    <input type="text" name="nama_pesawat" class="form-control" value="<?php echo $row['nama_pesawat']; ?>" >
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