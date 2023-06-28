<?php include('../conf/config.php');
$id    = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-warning">
      <div class="card-header">

        <div class="d-flex justify-content-between">
          <h3 class="card-title mb-0">EDIT DATA</h3>
          <!-- confirm == unclose -->

          <div>
            <span style="float: right; zoom: 75%; padding: 10px;">
              <?php if ($view['verifikasi'] == 'DRAFT') : ?>
                <label class="wtf wtf-danger wtf-arrow-right selected">
                  DRAFT
                </label>
              <?php else : ?>
                <label class="wtf wtf-danger wtf-arrow-right">
                  DRAFT
                </label>
              <?php endif; ?>

              <?php if ($view['verifikasi'] == 'CONFIRM') : ?>
                <label class="wtf wtf-danger wtf-arrow-right selected">
                  CONFIRM
                </label>
              <?php else : ?>
                <label class="wtf wtf-danger wtf-arrow-right">
                  CONFIRM
                </label>
              <?php endif; ?>

              <?php if ($view['verifikasi'] == 'DITERIMA' || $view['verifikasi'] == 'DITOLAK') : ?>
                <?php if ($view['verifikasi'] == 'DITERIMA') : ?>
                  <label class="wtf wtf-danger wtf-arrow-right selected">
                    DITERIMA
                  </label>
                <?php else : ?>
                  <label class="wtf wtf-danger wtf-arrow-right selected">
                    DITOLAK
                  </label>
                <?php endif; ?>
              <?php else : ?>
                <label class="wtf wtf-danger wtf-arrow-right">
                  DITERIMA / DITOLAK
                </label>
              <?php endif; ?>

              <label class="wtf wtf-danger wtf-arrow-right">
                ACC BM
              </label>

              <label class="wtf wtf-danger wtf-arrow-right">
                UNCLOSE
              </label>
            </span>

          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="get" action='update/update_data.php'>
          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>TANGGAL WO</label>
                <input type="date" class="form-control" name="tanggal_wo" value="<?php echo $view['tanggal_wo']; ?>" readonly>
                <input type="text" name="id" value="<?php echo $view['id']; ?>" hidden>

              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>JAM WO</label>
                <input type="time" class="form-control" name="jam_wo" value="<?php echo $view['jam_wo']; ?>" readonly>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>PEMBUAT WO</label>
                <input type="text" class="form-control" name="pembuat" value="<?php echo $view['pembuat']; ?>" readonly>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>DIPERBAIKI OLEH</label>
                <input type="text" class="form-control" name="diperbaiki_oleh" value="<?php echo $view['diperbaiki_oleh']; ?>" readonly>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>NAMA INV</label>
                <input type="text" class="form-control" name="nama_inventaris" value="<?php echo $view['nama_inventaris']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>NO INV</label>
                <input type="text" class="form-control" name="no_inventaris" value="<?php echo $view['no_inventaris']; ?>">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>TANGGAL TARGET SELESAI</label>
                <input type="date" class="form-control" name="tanggal_target" value="<?php echo $view['tanggal_target']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>JAM TARGET SELESAI</label>
                <input type="time" class="form-control" name="jam_target" value="<?php echo $view['jam_target']; ?>">
              </div>
            </div>
          </div>





          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>DESKRIPSI</label>
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $view['deskripsi']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>ANALISA</label>
                <input type="text" class="form-control" name="analisa" value="<?php echo $view['analisa']; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>PERBAIKAN</label>
                <input type="text" class="form-control" name="perbaikan" value="<?php echo $view['perbaikan']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>DIPERBAIKI OLEH</label>
                <input type="text" class="form-control" name="diperbaiki_oleh" value="<?php echo $view['diperbaiki_oleh']; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>DISERAHKAN OLEH</label>
                <input type="text" class="form-control" name="diserahkan_oleh" value="<?php echo $view['diserahkan_oleh']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>DITERIMA OLEH</label>
                <input type="text" class="form-control" name="diterima_oleh" value="<?php echo $view['diterima_oleh']; ?>">
              </div>
            </div>


            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <label>TANGGAL AKTUAL SELESAI</label>
                <input type="date" class="form-control" name="tanggal_aktual" value="<?php echo $view['tanggal_aktual']; ?>">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>JAM AKTUAL SELESAI</label>
                <input type="time" class="form-control" name="jam_aktual" value="<?php echo $view['jam_aktual']; ?>">
              </div>

            </div>
            <div class="col-sm-7">
              <div class="form-group">
                <label>VERIFIKASI </label>
                <select name="verifikasi" class="form-control">
                  <option value="DRAFT" <?php if ($view['verifikasi'] == 'DRAFT') echo 'selected'; ?>>DRAFT</option>
                  <option value="DITERIMA" <?php if ($view['verifikasi'] == 'DITERIMA') echo 'selected'; ?>>DITERIMA</option>
                  <option value="DITOLAK" <?php if ($view['verifikasi'] == 'DITOLAK') echo 'selected'; ?>>DITOLAK</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <td><select name="jumlah" hidden>
                    <option value="yes">yes</option>
                  </select></td>
              </div>

              <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
        </form>
      </div>


</section>