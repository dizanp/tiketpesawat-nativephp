 <?php 
    require_once ('header.php'); 
 ?>
 <?php
    require_once('../konek/connect.php');
    $sql= 'select * from tb_pesawat';
    $query  = mysqli_query($con,$sql); 
 ?>
        <div id="page-wrapper" >
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
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Pesawat</th>
                                            <th>Nama Pesawat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                            while($row  = mysqli_fetch_assoc($query)){ 
                                    ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['id_pesawat']; ?></td>
                                            <td><?php echo $row['nama_pesawat']; ?></td>
                                            <td>
                                                <span>
                                                    <a href="editpst.php?id_pesawat=<?php echo $row['id_pesawat']; ?>" class="btn btn-warning">Edit</a>
                                                </span>
                                                <span>
                                                    <a href="hapuspst.php?id_pesawat=<?php echo $row['id_pesawat']; ?>" class="btn btn-danger">Hapus</i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                                <div class="col-md-2">
                                <form method=post action=tambahpst.php><input type="submit" name="submit"value="Tambah Data Pesawat" class="btn btn-success">
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