<?php

include 'connect.php';

    $namakls=$_POST['namakls'];
    $dosen=$_POST['dosen'];

    mysqli_query($connect, "insert into kelas (nama_kelas, dosen) values ('$namakls','$dosen')");
    header("location: indupx.php");


   
 
    



?>