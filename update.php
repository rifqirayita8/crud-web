<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NRP = $_POST['NRP'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Nomor_HP = $_POST['Nomor_HP'];
$Jurusan = $_POST['Jurusan'];
$Alamat = $_POST['Alamat'];
$Email = $_POST['Email'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set Nama='$Nama', NRP='$NRP', Jenis_Kelamin='$Jenis_Kelamin', 
Nomor_HP='$Nomor_HP', Jurusan='$Jurusan', Alamat='$Alamat', Email='$Email', Matkul_Favorit='$Matkul_Favorit' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
