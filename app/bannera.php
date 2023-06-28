<?php include('../conf/config.php');
$query = mysqli_query($koneksi,"SELECT id,
(SELECT count(id) FROM tb_mahasiswa1 WHERE verifikasi='DONE')AS DONE,
(SELECT count(id) FROM tb_mahasiswa1 WHERE verifikasi='PROSES')AS PROSES,
(SELECT count(id) FROM tb_mahasiswa1 WHERE verifikasi='TIDAK_SESUAI')AS TIDAK_SESUAI,
(SELECT count(id) FROM tb_mahasiswa1 WHERE jumlah='yes')AS yes
FROM tb_mahasiswa1");


$view  =mysqli_fetch_array($query);?>

         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view['yes'];?></h3>

                <p>TOTAL CHECKLIST 5R KOMPUTER</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php?page=data-mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $view['DONE'];?></h3>

                <p>TOTAL CHECKLIST DONE</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?page=data-mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $view['PROSES'];?></h3>

                <p>TOTAL CHECKLIST PROSES</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?page=data-mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $view['TIDAK_SESUAI'];?></h3>

                <p>TOTAL TIDAK SESUAI</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       