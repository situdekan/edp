
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 ">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CHECKLIST 5R KOMPUTER LUBUKLINGGAU</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6 offset-sm-0 col-lg-12 offset-lg-0">
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                 TAMBAH DATA
                </button>
                 <div class="border border-6 rounded p-10">
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pelaksana</th>
                    <th>Departement</th>
                    <th>Tanggal Checklist</th>
                    <th>Jam Checklist</th>
                    <th>No Inventaris</th>
                    <th>Verifikasi</th>
                    <th>ACTION</th>
                    <th>DESKRIPSI</th>
                    <th>CPU</th>
                    <th>MONITOR</th>
                    <th>KEYBOARD</th>
                    <th>MOUSE</th>
                    <th>UPS</th>
                    <th>TELEPON</th>
                    <th>PRINTER</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa1");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++ ?>
                  <tr>
                    <td width="10%"><?php echo $no;?></td>
                    <td width="10%"><?php echo $mhs['nama'];?></td>
                    <td width="10%"><?php echo $mhs['departement'];?></td>
                    <td width="10%"><?php echo $mhs['tanggal_aktual'];?></td>
                    <td width="10%"><?php echo $mhs['jam_aktual'];?></td>
                    <td width="10%"><?php echo $mhs['no_inventaris'];?>/LLG/2022/EDP</td>
                    <td width="10%"><?php echo $mhs['verifikasi'];?></td>
                    <td><a href="delete/hapus_dataa.php?id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-danger">HAPUS
                    <a href="index.php?page=edit-dataa&& id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-success">VERIFIKASI</a> 
                    <td width="10%"><?php echo $mhs['deskripsi'];?></td>
                    <td width="10%"><?php echo $mhs['cpu'];?></td>
                    <td width="10%"><?php echo $mhs['monitor'];?></td>
                    <td width="10%"><?php echo $mhs['keyboard'];?></td>
                    <td width="10%"><?php echo $mhs['mouse'];?></td>
                    <td width="10%"><?php echo $mhs['ups'];?></td>
                    <td width="10%"><?php echo $mhs['telepon'];?></td>
                    <td width="10%"><?php echo $mhs['printer'];?></td>
                    
                   </tr>
                  <?php } ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>




      <!-- /.container-fluid -->
     </section>
     <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">TAMBAH DATA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
<form method="get" action="add/tambah_dataa.php">
             
            <div class="modal-body">
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>TANGGAL CHECKLIST &nbsp&nbsp</label>
     <td><input type="date" size="10px" name = "tanggal_aktual" value="<?php
 $tgl=date('Y-m-d');
 echo $tgl;
 ?>" readonly=readonly ></td>


    </div>
    <div class="form-group col-md-6">
    <label>JAM CHECKLIST &nbsp&nbsp&nbsp</label>
    <td><input type="time" size="10px" name = "jam_aktual" value="<?php date_default_timezone_set('Asia/Jakarta');?><?php
    $time=date('H:i:s');
    echo $time;
    ?>" readonly=readonly ></td>
    </div>

    <div class="form-group col-md-6">
    <label>NAMA PELAKSANA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <td><input type="text" size="10px" name="nama" value="<?php echo $_SESSION['nama']; ?>"readonly ></td>
    </div>

  <div class="form-group col-md-6">
    <label>DEPARTEMENT &nbsp&nbsp&nbsp</label>
   <td><input type="text" size="10px" name="departement" value="<?php echo $_SESSION['departement']; ?>" readonly></td>
    </div>

    <div class="form-group col-md-6">
      <label>NO INV &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
     <select class="form-control" name="no_inventaris" >
         <option>---</option>
         <?php 
         include "koneksi.php";     
         $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa2") or die (mysqli_error($koneksi));
         while($data =mysqli_fetch_array($query)){
          echo "<option value =$data[no_inventaris]>$data[no_inventaris]</option>";
         } ?>
        </select>
    </div>
<div class="row">
<div class="form-group col-md-6">
   <label>CPU</label>
  <select class="form-control" name="cpu" >
         <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
        </select>
    </div>


    <div class="form-group col-md-6">
       <label>MONITOR</label>
  <select class="form-control" name="monitor" >
        <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>

     <div class="form-group col-md-6">
       <label>KEYBOARD</label>
  <select class="form-control" name="keyboard">
        <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>


    <div class="form-group col-md-6">
       <label>MOUSE</label>
  <select class="form-control" name="mouse">
         <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>

    <div class="form-group col-md-6">
       <label>UPS</label>
  <select class="form-control" name="ups">
         <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>

 <div class="form-group col-md-6">
       <label>TELEPON</label>
  <select class="form-control" name="telepon">
         <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>


    <div class="form-group col-md-6">
       <label>PRINTER</label>
  <select class="form-control" name="printer">
        <option>---</option>
         <option>SUDAH DIBERSIHKAN</option>
        <option>PERANGKAT SEDANG DALAM PERBAIKAN</option>
        <option>TIDAK SESUAI</option>
      </select>
    </div>

<div class="form-group col-md-6">
  <select class="form-control" name="verifikasi" hidden>
        <option>---</option>
         <option>DRAFT</option>
        <option>PROSES</option>
        <option>DONE</option>
      </select>
    </div>


 <div class="form-group col-md-6">
    <td><input type="text" size="10px" class="form-control" name = "deskripsi" placeholder="jika terjadi masalah" hidden></td>
    </div>


    <div class="form-group col-md-6">
   <td><select name = "jumlah" hidden>
            <option value="yes">yes</option>
    </select></td>
    </div>



            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
          </div>

</form>




 