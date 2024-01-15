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
    <style>
  /* Mengatur tampilan form */
  form {
    width: 400px;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f9f9f9;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #333;
    color: #fff;
  }

  /* Mengatur tombol submit */
  .btn-submit {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
    border-radius: 4px;
  }

  .btn-submit:hover {
    background-color: #45a049;
  }
</style>

</head>
<body>
    <table border="1">
<form method="post" action="indupxprocess.php">
        nama kelas
        <select name="namakls" id="namakls">
        <option value="Workshop Pemrograman Web">Workshop Pemrograman Web</option>
        <option value="Algoritma Struktur Data">Algoritma Struktur Data</option>
        </select>
        dosen
        <input type="text" name="dosen" id="dosen" value="<?php echo $_SESSION['username'];?>" readonly></input>
        <input type="submit" value="simpen"></input>
    </form>
    <a href="index.php">kembali</a>
</table>
<?php

include 'connect.php';
$result=mysqli_query($connect,"select * from kelas");
while($row=mysqli_fetch_assoc($result)) {

?>
    <form method="post" action="nilai.php">
    <table border="1">
    <tr>
    <td><input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas'];?>"></input></td>
    <td><?php echo $row['nama_kelas'];?></td>
    <td><?php echo $row['dosen'];?></td>
    <td><?php echo $row['cb'];?></td>
    <td><input type="number" name="nilai" value="<?php echo $row['nilai'];?>"></td>
    <input type="submit" value="biji"></input>
    </tr>
    </form>

<?php    
}
?>
</body>
</html>