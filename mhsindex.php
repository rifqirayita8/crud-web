<?php
session_start();


if (!isset($_SESSION["login"])){
    header("Location: ../akademik2/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">kembali</a>
<table border="0" cellpadding="12" cellspacing="15">
		<tr>
			<th class="text-center" bgcolor="#106cfc">Nama Kelas</th>
			<th class="text-center" bgcolor="#106cfc">Dosen</th>
            <th class="text-center" bgcolor="#106cfc">Cb</th>
			<th class="text-center" bgcolor="#106cfc">OPSI</th>
        </tr>
        <?php

include 'connect.php';
$result=mysqli_query($connect,"select * from kelas");
while($row=mysqli_fetch_array($result)) {
?>
    <form action="process-upload.php" method="post" enctype="multipart/form-data">
    <tr>
    <td><input type="hidden" name ="id_kelas" value="<?php echo $row['id_kelas'];?>"></input></td>
    <td><?php echo $row['nama_kelas'];?></td>
    <td><?php echo $row['dosen'];?></td>
    <td><?php echo $row['cb'];?></td>
    <td><?php echo $row['nilai'];?></td>
    <td>
		<input type="file" name="file">
		<input type="submit" name="upload" value="Upload">
    </td>    
</tr>
</form>

<?php
}
?>
</table>
</body>
</html>