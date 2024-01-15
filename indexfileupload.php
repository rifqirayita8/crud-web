<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
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
</body>
</html>