<!DOCTYPE html>
<html lang="en">
<?php 

session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?> 

<?php include('../conf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php'); ?>
  <!-- Navbar -->
  <?php include('navbar.php'); ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php'); ?>
    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
 <?php 
if (isset($_GET['page'])){
  if($_GET['page']=='dashboard'){
    include('dashboard.php');
}
  else if($_GET['page']=='data-mahasiswa'){
    include('data_mahasiswa.php');
} 
 else if($_GET['page']=='data-mahasiswa-user'){
    include('data_mahasiswa_user.php');
}
  else if($_GET['page']=='data-mahasiswaa'){
    include('data_mahasiswaa.php');
} 
 else if($_GET['page']=='data-mahasiswa-usera'){
    include('data_mahasiswa_usera.php');
} 
  else if($_GET['page']=='data-mahasiswaaa'){
    include('data_mahasiswaaa.php');
} 
  else if($_GET['page']=='edit-data'){
    include('edit/edit_data.php');
}
 else if($_GET['page']=='edit-data-user'){
    include('edit/edit_data_user.php');
} 
  else if($_GET['page']=='edit-dataa'){
    include('edit/edit_dataa.php');
} 
  else if($_GET['page']=='edit-dataaa'){
    include('edit/edit_dataaa.php');
}
 }

 else{
  include('dashboarda.php');
 }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
