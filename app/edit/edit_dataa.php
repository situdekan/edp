
<?php include('../conf/config.php'); 
$id    = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa1 WHERE id='$id'");
$view  =mysqli_fetch_array($query);
?>

<section class "content">
  <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">EDIT DATA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update/update_dataa.php'>
                  <div class="row">
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Pelaksana</label>
                        <input type="text"  class="form-control" name="nama" value="<?php echo $view['nama'];?>"readonly>
                          <input type="text" name="id" value="<?php echo $view['id'];?>" hidden>
                        
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Departement</label>
                        <input type="text" class="form-control" name="departement" value="<?php echo $view['departement'];?>"readonly>
                      </div>
                    </div>
                  </div>


<div class="row">
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>TANGGAL AKTUAL SELESAI</label>
                         <input type="date" class="form-control" name="tanggal_aktual" value="<?php echo $view['tanggal_aktual'];?>">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>JAM AKTUAL SELESAI</label>
                       <input type="time" class="form-control" name="jam_aktual" value="<?php echo $view['jam_aktual'];?>">
                      </div>
                      </div>
                      </div>


<div class="row">
                    
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>NO INV</label>
                       <input type="text" class="form-control" name="no_inventaris" value="<?php echo $view['no_inventaris'];?>">
                      </div>
                    </div>
          

                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>VERIFIKASI </label>
                      <select name="verifikasi" class="form-control">
                  <option value="DITOLAK" <?php if ($view['verifikasi'] == 'DITOLAK') echo 'selected'; ?>>DITOLAK</option>
                  <option value="PROSES" <?php if ($view['verifikasi'] == 'PROSES') echo 'selected'; ?>>PROSES</option>
                  <option value="DONE" <?php if ($view['verifikasi'] == 'DONE') echo 'selected'; ?>>DONE</option>
                      </select>
                      </div>
                      </div></div>
                    
                 
<div class="row">
                     <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>CPU</label>
                          <select name="cpu" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['cpu'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['cpu'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['cpu'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>
                     <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>MONITOR</label>
                         <select name="monitor" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['monitor'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['monitor'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['monitor'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>


                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>KEYBOARD</label>
                          <select name="keyboard" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['keyboard'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['keyboard'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['keyboard'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>MOUSE</label>
                          <select name="mouse" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['mouse'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['mouse'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['mouse'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>UPS</label>
                         <select name="ups" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['ups'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['ups'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['ups'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>TELEPON</label>
                         <select name="telepon" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['telepon'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['telepon'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['telepon'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>


                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>PRINTER</label>
                         <select name="printer" class="form-control">
                  <option value="SUDAH DIBERSIHKAN" <?php if ($view['printer'] == 'SUDAH DIBERSIHKAN') echo 'selected'; ?>>SUDAH DIBERSIHKAN</option>
                  <option value="PERANGKAT SEDANG DALAM PERBAIKAN" <?php if ($view['printer'] == 'PERANGKAT SEDANG DALAM PERBAIKAN') echo 'selected'; ?>>PERANGKAT SEDANG DALAM PERBAIKAN</option>
                  <option value="TIDAK SESUAI" <?php if ($view['printer'] == 'TIDAK SESUAI') echo 'selected'; ?>>TIDAK SESUAI</option>
                      </select>
                      </div>
                    </div>
                    

                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>DESKRIPSI</label>
                          <input type="text" class="form-control" name="deskripsi" value="<?php echo $view['deskripsi'];?>">
                      </div>
                    </div>
                    </div>

                      <div class="form-group col-md-6">
                   <td><select name = "jumlah" hidden>
                      <option value="yes">yes</option>
                    </select></td>
                    </div>
                   
                      
                      
                    <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
                     </form>
              </div>
            
           
     </section>