
<?php
include('../../conf/config.php');
$id  	 	 	         = $_GET['id'];
$nama  	 	 	         = $_GET['nama'];
$departement     	 	 = $_GET['departement'];
$tanggal_aktual  		 = $_GET['tanggal_aktual'];
$jam_aktual 	 		 = $_GET['jam_aktual'];
$nama_inventaris 	 	 = $_GET['nama_inventaris'];
$no_inventaris	 	 	 = $_GET['no_inventaris'];
$cpu		 	 	 	 = $_GET['cpu'];
$monitor		    	 = $_GET['monitor'];
$keyboard 	 			 = $_GET['keyboard'];
$mouse     	    		 = $_GET['mouse'];
$ups  					 = $_GET['ups'];
$telepon 				 = $_GET['telepon'];
$printer  				 = $_GET['printer'];
$deskripsi  	 		 = $_GET['deskripsi'];
$verifikasi  	 		 = $_GET['verifikasi'];
$jumlah         		 = $_GET['jumlah'];


$query = mysqli_query($koneksi,"UPDATE tb_mahasiswa1 SET    																		nama = '$nama', departement = '$departement',tanggal_aktual ='$tanggal_aktual',jam_aktual = '$jam_aktual',nama_inventaris = '$nama_inventaris',no_inventaris = '$no_inventaris',cpu = '$cpu',monitor = '$monitor',keyboard = '$keyboard',mouse = '$mouse',ups = '$ups',telepon = '$telepon',printer = '$printer',deskripsi = '$deskripsi',verifikasi = '$verifikasi',jumlah = '$jumlah' WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswaa&id=' . $id) ?>