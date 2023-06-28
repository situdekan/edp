<?php
include('../../conf/config.php');
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


$query = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa1 VALUES
		('',
		'$nama', 
		'$departement',
		'$tanggal_aktual',
		'$jam_aktual',
		'$nama_inventaris',
		'$no_inventaris', 
		'$cpu', 
		'$monitor',
		'$keyboard', 
		'$mouse',
		'$ups',
		'$telepon',
		'$printer',
		'$deskripsi',
		'$verifikasi',
		'$jumlah')");
header('Location: ../index.php?page=data-mahasiswa-usera');?>
