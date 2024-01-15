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
	</style>
</head>
<body>
 
	<div class="text-bg-primary p-3"><h2 align="center">Welcome to Create, Read, Delete, and Update</h2></div>
	<br/>
	<br/>
	<a href="index.php" button type="button" class="btn btn-danger">KEMBALI</a>
	<br/>
	<br/>
	
	<article>
	<h3 class="display-6">Edit Data Mahasiswa</h3>
	<br>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="Nama" placeholder="nama lengkap anda" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NRP</td>
					<td><input type="number" name="NRP" value="<?php echo $d['NRP']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>Laki-laki<input type="radio" name="Jenis_Kelamin" value="Laki-laki" <?php if ($d['Jenis_Kelamin'] == 'Laki-laki') echo 'checked'?>>
						Perempuan<input type="radio" name="Jenis_Kelamin" value="Perempuan" <?php if ($d['Jenis_Kelamin'] == 'Perempuan') echo 'checked'?>></td>
				</tr>
                <tr>
					<td>Nomor HP</td>
					<td><input type="number" name="Nomor_HP" value="<?php echo $d['Nomor_HP']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>"></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td>e-mail</td>
					<td><input type="email" name="Email" placeholder="e-mail pribadi Anda" value="<?php echo $d['Email']; ?>"></td>
				</tr>
                <tr>
					<td>Matkul Favorit</td>
					<td><input type="text" name="Matkul_Favorit" value="<?php echo $d['Matkul_Favorit']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn-success"></td>
				</tr>	
			</table>
		</form>
		<?php 
	}
	?>
	<script src="http://localhost/akademik/sweetalert2.min.js" ></script>
	<script>
		const btnhapus = (url) => {

		Swal.fire({
		title: 'Ingin menghapus data?',
		text: "Tidak dapat di-undo",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yaa, Hapus!'
		}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire(
			{
				title : 'Berhasil!',
				text : 'Data sudah dihapus.',
				icon : 'success',
				showConfirmButton : false
			}
			);
			setTimeout(() => {
				window.location.replace(url);
			}, 1000);
		  }
		}); 
	}
</script>
 </article>
</body>
</html>