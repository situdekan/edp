
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 ">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA INVENTARIS EDP CABANG LUBUKLINGGAU</h3>
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
                    <th>No Inventaris</th>
                    <th>Nama Inventaris</th>
                    <th>Departement</th>
                    <th>Nama pengguna</th>
                    <th>Tanggal Beli</th>
                    <th>Harga Beli</th>
                    <th>Spesifikasi</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Serial Number</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa2");
                    while($mhs = mysqli_fetch_array($query)){
                      $no++ ?>
                  <tr>
                    <td width="10%"><?php echo $no;?></td>
                    <td width="10%"><?php echo $mhs['no_inventaris'];?>/LLG/2022/EDP</td>
                    <td width="10%"><?php echo $mhs['nama_inventaris'];?></td>
                    <td width="10%"><?php echo $mhs['departement'];?></td>
                    <td width="10%"><?php echo $mhs['nama_pengguna'];?></td>
                    <td width="10%"><?php echo $mhs['tgl_beli'];?></td>
                    <td width="10%"><?php echo $mhs['harga'];?></td>
                    <td width="10%"><?php echo $mhs['spesifikasi'];?></td>
                    <td width="10%"><?php echo $mhs['merk'];?></td>
                    <td width="10%"><?php echo $mhs['tipe'];?></td>
                    <td width="10%"><?php echo $mhs['serial_number'];?></td>
                    <td width="10%"><?php echo $mhs['keterangan'];?></td>
                    <td width="10%"><?php echo $mhs['status'];?></td>
                    <td><a href="delete/hapus_dataaa.php?id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-danger">HAPUS
                    <a href="index.php?page=edit-dataaa&& id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-success">VERIFIKASI</a> 
                   
                    
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
<form method="get" action="add/tambah_dataaa.php">
             
            <div class="modal-body">
    
  
     <div class="form-group col-md-6">
      <label>NO INV</label>
      <td><input type="text" class="form-control" size="10px" name="no_inventaris"></td>
    </div>

    <div class="form-group col-md-6">
    <label>NAMA INV</label>
    <td><input type="text" class="form-control" size="10px" name="nama_inventaris"></td>
    </div>

  <div class="form-group col-md-6">
    <label>DEPARTEMENT</label>
   <td><input type="text" size="10px" class="form-control" name="departement"></td>
    </div>

    <div class="form-group col-md-6">
      <label>NAMA PENGGUNA</label>
    <td><input type="text" size="10px" class="form-control"  name = "nama_pengguna" ></td>
    </div>

<div class="form-group col-md-6">
      <label></label>
    <td><input type="date" size="10px" class="form-control" name = "tgl_beli" hidden></td>
    </div>


    <div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control" name = "harga" hidden></td>
    </div>

    <div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control"  name = "spesifikasi" hidden></td>
    </div>

    <div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control"  name = "merk" hidden></td>
    </div>

<div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control"  name = "tipe" hidden></td>
    </div>

<div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control" name = "serial_number" hidden></td>
    </div>

    <div class="form-group col-md-6">
      <label></label>
    <td><input type="text" size="10px" class="form-control" name = "keterangan"hidden></td>
    </div>

<div class="form-group col-md-6">
  <label></label>
  <select class="form-control" name="status"hidden>
         <option>AKTIF</option>
        <option>NON-AKTIF</option>
      </select>
    </div>


            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
          </div>

</form>




 