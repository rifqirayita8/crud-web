<?php
include 'connect.php';
$nilai=$_POST['nilai'];
$id_kelas=$_POST['id_kelas'];

mysqli_query($connect,"update kelas set nilai='$nilai' where id_kelas='$id_kelas'");
header("location: indupx.php");
?>