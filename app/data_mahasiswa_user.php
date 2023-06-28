
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 ">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">WORK ORDER EDP || LUBUKLINGGAU</h3>
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
                    <th>No WO</th>
                    <th>Tanggal WO</th>
                    <th>Jam WO</th>
                    <th>Nama Inventaris</th>
                    <th>No Inventaris</th>
                    <th>Pembuat WO</th>
                    <th>Tanggal Target Selesai</th>
                    <th>Jam Target Selesai</th>
                    <th>Action</th>
                    <th>Tanggal Aktual Selesai</th>
                    <th>Jam Aktual Selesai</th>
                    <th>Deskripsi</th>
                    <th>Analisa</th>
                    <th>Perbaikan</th>
                    <th>Diperbaiki Oleh</th>
                    <th>Verifikasi</th>
                    <th>Diserahkan Oleh</th>
                    <th>Diterima Oleh</th>
                    <th>Departement</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $tes = $_SESSION['departement'];
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE departement = '$tes'");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++ ?>
                  <tr>
                    <td width="10%"><?php echo $no;?></td>
                    <td width="10%"><?php echo $mhs['tanggal_wo'];?></td>
                    <td width="10%"><?php echo $mhs['jam_wo'];?></td>
                    <td width="10%"><?php echo $mhs['nama_inventaris'];?></td>
                    <td width="10%"><?php echo $mhs['no_inventaris'];?>/LLG/2022/EDP</td>
                    <td width="10%"><?php echo $mhs['pembuat'];?></td>
                    <td width="10%"><?php echo $mhs['tanggal_target'];?></td>
                    <td width="10%"><?php echo $mhs['jam_target'];?></td>
                    <td>
                      <?php 
                      if ($mhs['verifikasi'] == 'DRAFT') { ?>
                        <a href="index.php?page=edit-data-user&id=<?php echo $mhs['id'];?>" class="btn btn-sm mx-3 btn-success">verifikasi
                      <?php } ?>
                    
                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view<?php echo $mhs['id'];?>">lihat</a> 






 <div class="modal fade" id="modal-view<?php echo $mhs['id'];?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">LIHAT DATA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Tanggal WO</label>
      <input type="text" class="form-control" value="<?php echo $mhs['tanggal_wo'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>JAM WO</label>
      <input type="text" class="form-control" value="<?php echo $mhs['jam_wo'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Nama Inventaris</label>
      <input type="text" class="form-control" value="<?php echo $mhs['nama_inventaris'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>No Inventaris</label>
      <input type="text" class="form-control" value="<?php echo $mhs['no_inventaris'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Pembuat WO</label>
      <input type="text" class="form-control" value="<?php echo $mhs['pembuat'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Diperbaiki Oleh</label>
      <input type="text" class="form-control" value="<?php echo $mhs['diperbaiki_oleh'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Tanggal Target Selesai</label>
      <input type="text" class="form-control" value="<?php echo $mhs['tanggal_target'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Jam Target Selesai</label>
      <input type="text" class="form-control" value="<?php echo $mhs['jam_target'];?>">
    </div>
     <div class="form-group col-md-6">
      <label>Tanggal Aktual Selesai</label>
      <input type="text" class="form-control" value="<?php echo $mhs['tanggal_aktual'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>Jam Aktual Selesai</label>
      <input type="text" class="form-control" value="<?php echo $mhs['jam_aktual'];?>">
    </div>
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <input type="text" class="form-control" value="<?php echo $mhs['deskripsi'];?>">
  </div>
  <div class="form-group">
    <label>ANALISA</label>
    <input type="text" class="form-control" value="<?php echo $mhs['analisa'];?>">
  </div>
   <div class="form-group">
    <label>PERBAIKAN</label>
    <input type="text" class="form-control" value="<?php echo $mhs['perbaikan'];?>">
  </div>

    <div class="form-group col-md-4">
      <label>VERIFIKASI</label>
      <input type="text" class="form-control" value="<?php echo $mhs['verifikasi'];?>">
    </div>

    <div class="form-group col-md-6">
      <label>DISERAHKAN OLEH</label>
      <input type="text" class="form-control" value="<?php echo $mhs['diserahkan_oleh'];?>">
    </div>
    <div class="form-group col-md-6">
      <label>DITERIMA OLEH</label>
      <input type="text" class="form-control" value="<?php echo $mhs['diterima_oleh'];?>">
    </div>
  </div>
</form>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

           
                    <td width="10%"><?php echo $mhs['tanggal_aktual'];?></td>
                    <td width="10%"><?php echo $mhs['jam_aktual'];?></td>
                    <td width="10%"><?php echo $mhs['deskripsi'];?></td>
                    <td width="10%"><?php echo $mhs['analisa'];?></td>
                    <td width="10%"><?php echo $mhs['perbaikan'];?></td>
                    <td width="10%"><?php echo $mhs['diperbaiki_oleh'];?></td>
                    <td width="10%"><?php echo $mhs['verifikasi'];?></td>
                    <td width="10%"><?php echo $mhs['diserahkan_oleh'];?></td>
                    <td width="10%"><?php echo $mhs['diterima_oleh'];?></td>
                    <td width="10%"><?php echo $mhs['departement'];?></td>
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
<form method="get" action="add/tambah_data_user.php">
             
            <div class="modal-body">
              
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>TANGGAL WO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
     <td><input type="date" size="10px" name = "tanggal_wo" value="<?php
 $tgl=date('Y-m-d');
 echo $tgl;
 ?>" readonly=readonly ></td>


    </div>
    <div class="form-group col-md-6">
    <label>JAM WO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <td><input type="time" size="10px" name = "jam_wo" value="<?php date_default_timezone_set('Asia/Jakarta');?><?php
    $time=date('H:i:s');
    echo $time;
    ?>" readonly=readonly ></td>
    </div>

    <div class="form-group col-md-6">
    <label>PEMBUAT WO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <td><input type="text" size="10px" name="pembuat" value="<?php echo $_SESSION['nama']; ?>"readonly ></td>
    </div>


    <div class="form-group col-md-6">
    <label>DIPERBAIKI OLEH&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
           <select name = "diperbaiki_oleh" >
            <option value="SYAHDANU">SYAHDANU</option>
            </select>
    </div>


    <div class="form-group col-md-6">
    <label for="">NAMA INV &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <tr>
    <td>
     <select class="form-control" name="nama_inventaris" >
         <option>---</option>
         <?php 
         include "koneksi.php";     
         $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa2") or die (mysqli_error($koneksi));
         while($data =mysqli_fetch_array($query)){
          echo "<option value =$data[nama_inventaris]>$data[nama_inventaris]</option>";
         } ?>
        </select>
    </td>
    </tr>
    </div>

    <div class="form-group col-md-6">
    <div class="form-group">
            <label>No Inventaris</label>
            <select class="form-control" name="no_inventaris">
            </select>
    </div>



    <div class="form-group col-md-6">
    <label >TANGGAL TARGET SELESAI &nbsp</label>
   <td><input type="date" size="10px" name ="tanggal_target"></td>
    </div>

<div class="form-group col-md-6">
    <label>JAM TARGET SELESAI &nbsp</label>
   <td><input type="time" size="10px" name ="jam_target"></td>
    </div>

     <div class="form-group col-md-6">
   <td><input type="date" size="10px" name ="tanggal_aktual" hidden></td>
    </div>

<div class="form-group col-md-6">
   <td><input type="time" size="10px" name ="jam_aktual" hidden></td>
    </div>


<br>
  </div>
  <div class="form-group">
    <label>DESKRIPSI</label>
    <input type="text" class="form-control" name = "deskripsi" placeholder="contoh : minta tolong kepada edp untuk memperbaiki......... (awalin dengan kata minta tolong)" >
</div>
  <div class="form-group">
    <input type="text" class="form-control" name = "analisa" hidden>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name = "perbaikan" hidden>
  </div>

  <div class="form-group col-md-6">
  <select class="form-control" name="verifikasi" hidden>
         <option>DRAFT</option>
        <option>DISETUJUI</option>
        <option>DITOLAK</option>
      </select>
    </div>

     <div class="form-group col-md-6">
   <td><input type="text" size="10px" name = "diserahkan_oleh" hidden></td>
    </div>

<div class="form-group col-md-6">
   <td><input type="text" size="10px" name = "diterima_oleh" hidden></td>
    </div>


    <div class="form-group col-md-6">
   <td><select name = "jumlah" hidden>
            <option value="yes">yes</option>
    </select></td>
    </div>

<div class="form-group col-md-6">
   <td><input type="text" size="10px" name="departement" value="<?php echo $_SESSION['departement']; ?>"hidden ></td>
    </div>


            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
          </div>

</form>

<script>

        $("#tb_mahasiswa").change(function(){
            // variabel dari nilai combo box kendaraan
            var no_inventaris = $("#tb_mahasiswa").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "get",
                dataType: "html",
                url: "add/tambah_data.php",
                data: "tb_mahasiswa="+nama_inventaris,
                success: function(data){
                   $("#nama_inventaris").html(data);
                }
            });
        });

        $("#no_inventaris").change(function(){
            // variabel dari nilai combo box merk
            var id_merk = $("#no_inventaris").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "get",
                dataType: "html",
                url: "add/tambah_data.php",
                data: "no_inventaris="+no_inventaris,
                success: function(data){
                    $("#no_inventaris").html(data);
                }
            });
        });
    </script>



 