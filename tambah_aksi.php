<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Nama = $_POST['Nama'];
$NRP = $_POST['NRP'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Nomor_HP = $_POST['Nomor_HP'];
$Jurusan = $_POST['Jurusan'];
$Alamat = $_POST['Alamat'];
$Email = $_POST['Email'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];
 
// menginput data ke database
$nm= mysqli_query($koneksi,"insert into mahasiswa values('','$Nama','$NRP','$Jenis_Kelamin','$Nomor_HP'
,'$Jurusan','$Alamat','$Email','$Matkul_Favorit')");
 /*
if ($nm){
    echo "<script type='text/javascript'>
    setTimeout(function() {
        swal({
            title: 'nama berhasil tersimpan.',
            text: 'Nama : $nm',
            type: 'success',
            timer: 3200,
            showConfirmButton: true;
        });
    },10);
    window.setTimeout(function(){
        window.location
        }"
}
*/
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>