<?php
include('../../conf/config.php');
$no_inventaris  	 	 	         = $_GET['no_inventaris'];
$nama_inventaris 					 = $_GET['nama_inventaris'];
$departement     	 				 = $_GET['departement'];
$nama_pengguna 	 					 = $_GET['nama_pengguna'];
$tgl_beli 	 	 					 = $_GET['tgl_beli'];
$harga	 	 	 					 = $_GET['harga'];
$spesifikasi		 	 	 		 = $_GET['spesifikasi'];
$merk		    	 				 = $_GET['merk'];
$tipe	 			 				 = $_GET['tipe'];
$serial_number     	    			 = $_GET['serial_number'];
$keterangan 						 = $_GET['keterangan'];
$status 							 = $_GET['status'];
$query = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa2 VALUES
		('',
		'$no_inventaris', 
		'$nama_inventaris',
		'$departement',
		'$nama_pengguna',
		'$tgl_beli',
		'$harga', 
		'$spesifikasi', 
		'$merk',
		'$tipe', 
		'$serial_number',
		'$keterangan',
		'$status')");
header('Location: ../index.php?page=data-mahasiswaaa');?>
