<?php 
$koneksi = mysqli_connect('localhost','root','','db_sikampus');
//mengecek koneksi
if(!$koneksi) {
	die("koneksi gagal:". mysqli_connect_error());
} 
else{
	//echo "koneksi berhasil";
}
?>
