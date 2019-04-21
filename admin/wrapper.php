
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2> 
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <?php
                            require_once('../konek/connect.php');
                            $sql = mysqli_query($con,"SELECT * FROM tb_pesawat");
                            $count = mysqli_num_rows($sql);
                            echo "<h3>$count</h3>"
                          ?>
                          <p>Data Pesawat</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="listpst.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <?php
                            $sql = mysqli_query($con,"SELECT * FROM tb_tiket");
                            $count = mysqli_num_rows($sql);
                            echo "<h3>$count</h3>"
                          ?>
                          <p>Data Tiket</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="listtiket.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <?php
                            $sql = mysqli_query($con,"SELECT * FROM transaksi");
                            $count = mysqli_num_rows($sql);
                            echo "<h3>$count</h3>"
                          ?>
                          <p>Data Transaksi</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="transaksi.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                </div>
            </div>
                            
                <!-- /. ROW  -->
