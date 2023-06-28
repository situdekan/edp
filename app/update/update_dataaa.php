
<?php
include('../../conf/config.php');
$id  	 	 	         			 = $_GET['id'];
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

$query = mysqli_query($koneksi,"UPDATE tb_mahasiswa2 SET    																		no_inventaris = '$no_inventaris', nama_inventaris = '$nama_inventaris',departement ='$departement',nama_pengguna = '$nama_pengguna',tgl_beli = '$tgl_beli',harga = '$harga',spesifikasi = '$spesifikasi',merk = '$merk',tipe = '$tipe',serial_number = '$serial_number',keterangan = '$keterangan',status = '$status' WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswaaa&id=' . $id) ?>