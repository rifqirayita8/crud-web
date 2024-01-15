<?php 
$connect = mysqli_connect("localhost","root","","akademik");
 
// ngecek koneksi
if (mysqli_connect_errno()){
	echo "Gagal koneksi ke database: " . mysqli_connect_error();
}
 
?>