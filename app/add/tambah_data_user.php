<?php
include('../../conf/config.php');
$tanggal_wo  	 	 	 = $_GET['tanggal_wo'];
$jam_wo     	 	 	 = $_GET['jam_wo'];
$nama_inventaris 	 	 = $_GET['nama_inventaris'];
$no_inventaris	 	 	 = $_GET['no_inventaris'];
$pembuat		 	 	 = $_GET['pembuat'];
$tanggal_target		     = $_GET['tanggal_target'];
$jam_target 	 		 = $_GET['jam_target'];
$tanggal_aktual  		 = $_GET['tanggal_aktual'];
$jam_aktual 	 		 = $_GET['jam_aktual'];
$deskripsi     	    	 = $_GET['deskripsi'];
$analisa  				 = $_GET['analisa'];
$perbaikan  			 = $_GET['perbaikan'];
$diperbaiki_oleh  		 = $_GET['diperbaiki_oleh'];
$verifikasi  	 		 = $_GET['verifikasi'];
$diserahkan_oleh  	 	 = $_GET['diserahkan_oleh'];
$diterima_oleh  		 = $_GET['diterima_oleh'];
$jumlah         		 = $_GET['jumlah'];
$departement        	 = $_GET['departement'];

$query = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa VALUES
		('',
		'$tanggal_wo', 
		'$jam_wo',
		'$nama_inventaris',
		'$no_inventaris', 
		'$pembuat', 
		'$tanggal_target',
		'$jam_target', 
		'$tanggal_aktual',
		'$jam_aktual',
		'$deskripsi',
		'$analisa',
		'$perbaikan',
		'$diperbaiki_oleh',
		'$verifikasi',
		'$diserahkan_oleh',
		'$diterima_oleh',
		'$jumlah',
		'$departement')");
header('Location: ../index.php?page=data-mahasiswa-user');?>
