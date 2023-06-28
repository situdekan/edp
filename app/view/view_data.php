
<?php
include('../../conf/config.php');
$id              		 = $_GET['id'];
$tanggal_wo  	 	 	 = $_GET['tanggal_wo'];
$jam_wo     	 	 	 = $_GET['jam_wo'];
$pembuat		 	 	 = $_GET['pembuat'];
$nama_inventaris 	 	 = $_GET['nama_inventaris'];
$no_inventaris	 	 	 = $_GET['no_inventaris'];
$tanggal_target		     = $_GET['tanggal_target'];
$jam_target         	 = $_GET['jam_target'];
$tanggal_aktual          = $_GET['tanggal_aktual'];
$jam_aktual          	 = $_GET['jam_aktual'];
$deskripsi     	    	 = $_GET['deskripsi'];
$analisa  				 = $_GET['analisa'];
$perbaikan  			 = $_GET['perbaikan'];
$diperbaiki_oleh  		 = $_GET['diperbaiki_oleh'];
$verifikasi  	 		 = $_GET['verifikasi'];
$diserahkan_oleh  	 	 = $_GET['diserahkan_oleh'];
$diterima_oleh  		 = $_GET['diterima_oleh'];
$query = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET    																		tanggal_wo = '$tanggal_wo', jam_wo = '$jam_wo',pembuat ='$pembuat',nama_inventaris = '$nama_inventaris', no_inventaris = '$no_inventaris',tanggal_target = '$tanggal_target',jam_target = '$jam_target', tanggal_aktual = '$tanggal_aktual',jam_aktual = '$jam_aktual',deskripsi = '$deskripsi',analisa = '$analisa',perbaikan = '$perbaikan',diperbaiki_oleh = '$diperbaiki_oleh',verifikasi = '$verifikasi',diserahkan_oleh = '$diserahkan_oleh',diterima_oleh = '$diterima_oleh' WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswa');?>