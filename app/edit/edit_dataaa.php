
<?php include('../conf/config.php'); 
$id    = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa2 WHERE id='$id'");
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
                <form method="get" action='update/update_dataaa.php'>
                  <div class="row">
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No Inventaris</label>
                        <input type="text" class="form-control" name="no_inventaris" value="<?php echo $view['no_inventaris'];?>">
                          <input type="text" name="id" value="<?php echo $view['id'];?>" hidden>
                        <div class="form-group col-md-6">

    <div class="form-group col-md-6">
    <label>NAMA INV</label>
    <td><input type="text" class="form-control" name="nama_inventaris" value="<?php echo $view['nama_inventaris'];?>"></td>
    </div>

  <div class="form-group col-md-6">
    <label>DEPARTEMENT</label>
   <td><input type="text" class="form-control" size="10px" name="departement" value="<?php echo $view['departement'];?>"></td>
    </div>

    <div class="form-group col-md-6">
      <label>NAMA PENGGUNA</label>
    <td><input type="text" size="10px" class="form-control"  name = "nama_pengguna" value="<?php echo $view['nama_pengguna'];?>"></td>
    </div>

<div class="form-group col-md-6">
      <label>TANGGAL BELI</label>
    <td><input type="date" size="10px" class="form-control" name = "tgl_beli" value="<?php echo $view['tgl_beli'];?>"></td>
    </div>


    <div class="form-group col-md-6">
      <label>HARGA BELI</label>
    <td><input type="text" size="10px" class="form-control" name = "harga" value="<?php echo $view['harga'];?>"></td>
    </div>

    <div class="form-group col-md-6">
      <label>SPESIFIKASI</label>
    <td><input type="text" size="10px" class="form-control"  name = "spesifikasi" value="<?php echo $view['spesifikasi'];?>"></td>
    </div>

    <div class="form-group col-md-6">
      <label>MERK</label>
    <td><input type="text" size="10px" class="form-control"  name = "merk" value="<?php echo $view['merk'];?>"></td>
    </div>

<div class="form-group col-md-6">
      <label>TIPE</label>
    <td><input type="text" size="10px" class="form-control"  name = "tipe" value="<?php echo $view['tipe'];?>"></td>
    </div>

<div class="form-group col-md-6">
      <label>SERIAL NUMBER</label>
    <td><input type="text" size="10px" class="form-control" name = "serial_number" value="<?php echo $view['serial_number'];?>"></td>
    </div>

    <div class="form-group col-md-6">
      <label>KETERANGAN</label>
    <td><input type="text" size="10px" class="form-control" name = "keterangan" value="<?php echo $view['keterangan'];?>"></td>
    </div>

<div class="form-group col-md-6">
  <label>STATUS</label>
  <select class="form-control" name="status" value="<?php echo $view['status'];?>">
         <option>AKTIF</option>
        <option>NON-AKTIF</option>
      </select>
    </div>
                      <div class="form-group col-md-6">
                   <td><select name = "jumlah" value="<?php echo $view['jumlah'];?>">
                      <option value="yes">yes</option>
                    </select></td>
                    </div>
                   
                      
                      
                    <button type="submit" class="btn btn-sm btn-info">SIMPAN</button>
                     </form>
              </div>
            
           
     </section>