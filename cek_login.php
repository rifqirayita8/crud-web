<?php 
// mengaktifkan session php
session_start();

if (isset($_COOKIE['login']) ){
	if( $_COOKIE['login']='true'){
		$_SESSION['login']=true;
	}
}

// menghubungkan dengan koneksi
include 'connect.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$email=$_POST['email'];
$password = md5($_POST['password']);
$level= $_POST['level'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect,"select * from dataadmin where username='$username' and password='$password'");
$lv= mysqli_fetch_assoc($data);
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	if($lv['level']=="Mahasiswa"){

	$_SESSION['username'] = $username;
	$_SESSION['email']= $email;
	$_SESSION['level']=  "Mahasiswa";
	$_SESSION['status'] = "login";
	$_SESSION['login'] = true;

	header("location:subjects.php");
	}else if ($lv['level']=="Dosen"){

	$_SESSION['username'] = $username;
	$_SESSION['email']= $email;
	$_SESSION['level']=  "Dosen";
	$_SESSION['status'] = "login";
	$_SESSION['login'] = true;

	header("location:index.php");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>