<?php include('../conf/config.php');
$query = mysqli_query($koneksi, "SELECT id,
(SELECT count(id) FROM tb_mahasiswa WHERE verifikasi='DITERIMA') AS DITERIMA,
(SELECT count(id) FROM tb_mahasiswa WHERE verifikasi='DITOLAK') AS DITOLAK,
(SELECT count(id) FROM tb_mahasiswa WHERE verifikasi='draft') AS draft,
(SELECT count(id) FROM tb_mahasiswa WHERE jumlah='yes') AS yes
FROM tb_mahasiswa");
?>

<?php if (mysqli_num_rows($query) == 0) : ?>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>0</h3>

        <p>TOTAL WO</p>
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
        <h3>0</h3>

        <p>TOTAL WO SELESAI</p>
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
        <h3>0</h3>

        <p>TOTAL WO BELUM SELESAI</p>
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
        <h3>0</h3>

        <p>TOTAL WO DITOLAK</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
<?php else : ?>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo $view['yes']; ?></h3>

        <p>TOTAL WO</p>
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
        <h3><?php echo $view['DITERIMA']; ?></h3>

        <p>TOTAL WO SELESAI</p>
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
        <h3><?php echo $view['draft']; ?></h3>

        <p>TOTAL WO BELUM SELESAI</p>
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
        <h3><?php echo $view['DITOLAK']; ?></h3>

        <p>TOTAL WO DITOLAK</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
<?php endif; ?>