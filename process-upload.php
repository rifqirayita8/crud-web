<?php

include 'connect.php';
   if(isset($_POST['upload'])){
	$id_kelas=$_POST['id_kelas'];
	$ekstensi_diperbolehkan	= array('pdf','doc','docx');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 10440700){			
			$terupload=move_uploaded_file($file_tmp, '../donglot/'.$nama);
			mysqli_query($connect,"update kelas set cb='$nama' where id_kelas='$id_kelas'");
			if($terupload){
				echo 'FILE BERHASIL DI UPLOAD';
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	       }
    }
    
?>