<?php
	
    session_start();
	if (!isset($_SESSION["login"])){
		header("Location: ../akademik2/login.php");
		exit;
	}
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" src="http://localhost/akademik/sweetalert2.min.css">
	<link href="logo.png" rel='shortcut icon'>
	<title>Rifqi Rayicrud</title>
	<div class="text-bg-primary p-3"><h2 align="center">Welcome to Create, Read, Delete, and Update</h2></div>
	<style>
		body{
			background-image: url('kampus.jpg');
			background-size: cover;
			font-family: Montserrat;
		}
		article{
			background-color: rgba(255, 255, 255, 0.5);
			backdrop-filter: blur(10px);
			padding: 1rem;
			font-size: 20px;
		}
		a{text-decoration: none; font-size: 20px; padding: 5px 10px;}
		ul{padding: 14px;}
		li{list-style: none; display: inline;}
		li a{background: #222; color: #d4d4d4;}
		li a: hover{background: #4da4ff; color: #fff;}
		
		.navi{background: #222; height: 50px;}
	</style>
</head>
<body>

<nav class="navi">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="tambah.php">Tambah</a><li>
			<li><a href="../akademik2/register.php">Register</a></li>
			<li><a href="../akademik2/logout.php">Logout</a></li>
	</ul>
	</nav>

	<br/>
	<br/>
	<a href="index.php" button type="button" class="btn btn-danger">KEMBALI</a>
	<br/>
	<br/>
	<article>
	<h3 class="display-6">Tambah Data Mahasiswa</h3>
	<br>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama" placeholder="nama lengkap anda"></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="number" name="NRP"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>Laki-laki:	<input type="radio" name="Jenis_Kelamin" value="Laki-laki">
					Perempuan:	<input type="radio" name="Jenis_Kelamin" value="Perempuan"></td>
			</tr>
            <tr>			
				<td>Nomor HP</td>
				<td><input type="number" name="Nomor_HP"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="Jurusan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td>e-mail</td>
				<td><input type="email" name="Email" placeholder="e-mail pribadi Anda"></td>
			</tr>
			<tr>
				<td>Matkul Favorit</td>
				<td><input type="text" name="Matkul_Favorit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-success"></td>
			</tr>		
		</table>
	</form>
	<script src="http://localhost/akademik/sweetalert2.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</article>
</body>
</html>