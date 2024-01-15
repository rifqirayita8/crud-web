<?php
	
    session_start();

	if (isset($_COOKIE['login'])){
		if($_COOKIE['login']== 'true'){
			$_COOKIE['login']= true;
		}
	}
	if (!isset($_SESSION["login"])){
		header("Location: ../akademik2/login.php");
		exit;
	}
		if (isset($_POST['kuki'])){
			setcookie('login','true',time() +60);
		}
		
	include 'koneksi.php';
	$golek= mysqli_query($koneksi, "SELECT * FROM mahasiswa");

	if (isset($_POST["cari"])) {
		$golek= cari($_POST["keyword"]);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
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
		}
		head{
			background-color: rgba(255, 255, 255, 0.5);
			backdrop-filter: blur(10px);
			padding: 1rem;
		}
		#cari{
			display: inline;
		}
	</style>
</head>
<body>
	
		

	
	<article>
	<a href="../akademik2/index.php"><button type="button" class="btn btn-danger">KEMBALI</button></a>
	<br>
	<br>
	<a href="tambah.php"><button type="button" class="btn btn-success">TAMBAH MAHASISWA</button></a>
	<input type="text" name="cari" id="cari" placeholder="masukkan nama mahasiswa">
	<br/>
	<br/>
	<table border="0" cellpadding="12" cellspacing="15">
		<tr>
			<th class="text-center" bgcolor="#106cfc">NO</th>
			<th class="text-center" bgcolor="#106cfc">Nama</th>
			<th class="text-center" bgcolor="#106cfc">NRP</th>
            <th class="text-center" bgcolor="#106cfc">Jenis Kelamin</th>
            <th class="text-center" bgcolor="#106cfc">Nomor HP</th>
            <th class="text-center" bgcolor="#106cfc">Jurusan</th>
			<th class="text-center" bgcolor="#106cfc">Alamat</th>
			<th class="text-center" bgcolor="#106cfc">e-mail</th>
			<th class="text-center" bgcolor="#106cfc">Matkul Favorit</th>
			<th class="text-center" bgcolor="#106cfc">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><b><?php echo $no++; ?></b></td>
				<td><b><?php echo $d['Nama']; ?></b></td>
				<td><b><?php echo $d['NRP']; ?></b></td>
				<td><b><?php echo $d['Jenis_Kelamin']; ?></b></td>
                <td><b><?php echo $d['Nomor_HP']; ?></b></td>
				<td><b><?php echo $d['Jurusan']; ?></b></td>
				<td><b><?php echo $d['Alamat']; ?></b></td>
				<td><b><?php echo $d['Email']; ?></b></td>
				<td><b><?php echo $d['Matkul_Favorit']; ?><b></td>
				<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>"  button type="button" class="btn btn-success">EDIT</button></a>
				<br>
				<a onclick=btnhapus(`hapus.php?id=<?php echo $d['id']; ?>`)> 
					<button id="btn-hapus" class="btn btn-danger">HAPUS</button>
				</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<script src="http://localhost/akademik/sweetalert2.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
	</article>
</body>
</html>