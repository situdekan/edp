
<?php include('../conf/config.php'); 
$id    = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view  =mysqli_fetch_array($query);
?>

<section class "content">
  <div class="container-fluid">
    <div class="card card-warning">
      <div class="card-header">
      <!-- /.card-header -->
      <div class="card-body">
        <form method="get" action='update/update_data_user.php'>
          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">

                <input type="date"  class="form-control" name="tanggal_wo" value="<?php echo $view['tanggal_wo'];?>"readonly hidden>
                <input type="text" name="id" value="<?php echo $view['id'];?>" hidden>

              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <input type="time" class="form-control" name="jam_wo" value="<?php echo $view['jam_wo'];?>"readonly hidden>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-5">
              <!-- text input -->
              <div class="form-group">
                <input type="text" class="form-control" name="pembuat" value="<?php echo $view['pembuat'];?>" readonly hidden>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
               <input type="text" class="form-control" name="diperbaiki_oleh" value="<?php echo $view['diperbaiki_oleh'];?>"readonly hidden>
             </div>
           </div>
         </div>

         <div class="row">
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <input type="text" class="form-control" name="nama_inventaris" value="<?php echo $view['nama_inventaris'];?>" hidden>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
             <input type="text" class="form-control" name="no_inventaris" value="<?php echo $view['no_inventaris'];?>" hidden>
           </div>
         </div>
       </div>


       <div class="row">
        <div class="col-sm-5">
          <!-- text input -->
          <div class="form-group">
            <input type="date" class="form-control" name="tanggal_target" value="<?php echo $view['tanggal_target'];?>" hidden>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <input type="time" class="form-control" name="jam_target" value="<?php echo $view['jam_target'];?>" hidden>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5">
          <!-- text input -->
          <div class="form-group">
           <input type="text" class="form-control" name="deskripsi" value="<?php echo $view['deskripsi'];?>"hidden>
         </div>
       </div>
       <div class="col-sm-5">
        <div class="form-group">
         <input type="text" class="form-control" name="analisa" value="<?php echo $view['analisa'];?>" hidden>
       </div>
     </div>
   </div>
   <div class="row">
    <div class="col-sm-5">
      <!-- text input -->
      <div class="form-group">
       <input type="text" class="form-control" name="perbaikan" value="<?php echo $view['perbaikan'];?>" hidden>
     </div>
   </div>
   <div class="col-sm-5">
    <div class="form-group">
     <input type="text" class="form-control" name="diperbaiki_oleh" value="<?php echo $view['diperbaiki_oleh'];?>" hidden>
   </div>
 </div>
</div>

<div class="col-sm-5">
  <!-- text input -->
  <div class="form-group">
    <input type="text" class="form-control" name="diserahkan_oleh" value="<?php echo $view['diserahkan_oleh'];?>" hidden>
  </div>
</div>
<!-- text input -->



<div class="row">
  <div class="col-sm-5">
    <!-- text input -->
    <div class="form-group">
     <label>TANGGAL AKTUAL SELESAI</label>
     <input type="date" class="form-control" name="tanggal_aktual" value="<?php echo $view['tanggal_aktual'];?>" required >
   </div>
 </div>
 <div class="col-sm-5">
  <div class="form-group">
    <label>JAM AKTUAL SELESAI</label>
    <input type="time" class="form-control" name="jam_aktual" value="<?php echo $view['jam_aktual'];?>" required>
  </div>
</div>
</div>


<div class="row">
  <div class="col-sm-5">
    <!-- text input -->
    <div class="form-group">
     <label>DITERIMA OLEH</label>
     <td><input type="text" class="form-control" size="10px" name="diterima_oleh" value="<?php echo $_SESSION['nama']; ?>"  readonly ></td>
   </div>
 </div>
 <div class="col-sm-5">
  <div class="form-group"> 
   <label>VERIFIKASI </label>
   
   <!-- <select name = "verifikasi" class="form-control" value="<?php echo $view['verifikasi'];?>" >
     <option value="DRAFT">DRAFT</option>
     <option value="DITERIMA">DITERIMA</option>
     <option value="DITOLAK">DITOLAK</option>
   </select> -->

   <select name="verifikasi" class="form-control">
    <option value="DRAFT" <?php if ($view['verifikasi'] == 'DRAFT') echo 'selected'; ?>>DRAFT</option>
    <option value="DITERIMA" <?php if ($view['verifikasi'] == 'DITERIMA') echo 'selected'; ?>>DITERIMA</option>
    <option value="DITOLAK" <?php if ($view['verifikasi'] == 'DITOLAK') echo 'selected'; ?>>DITOLAK</option>
  </select>

<div class="form-group col-md-6">
   <td><select name = "jumlah" hidden>
            <option value="yes">yes</option>
    </select></td>
    </div>
</div>
</div>
</div>
<button type="submit" class="btn btn-sm btn-info">SIMPAN</button>

</form>
</div>


</section>