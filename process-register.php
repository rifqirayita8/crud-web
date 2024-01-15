<?php 
// koneksi database
include 'connect.php';
 /*
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpass']);

    $select = " select * from dataadmin where username ='$username' && password = '$password' "; 
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
            $error[] = 'user sudah ada';
    }else{
        if($password != $cpass){
            $error[] = 'password salah';
        }else{
            mysqli_query($conn, "insert into dataadmin values('','$username','$email','$password') ");
            header('location: login.php');
        
        }  
    }
};
*/
if(isset($_POST['register'])){
  
    $email= mysqli_real_escape_string ($connect, $_POST['email']);
    $username= mysqli_real_escape_string ($connect, $_POST['username']);
    $password= md5($_POST['password']);
    $cpass= md5($_POST['cpass']);
    $level= ($_POST['level']);
    

    $cpassword= password_hash($password, PASSWORD_DEFAULT);
    $loginn= mysqli_query($connect, "SELECT * FROM dataadmin WHERE username ='$username' OR email= '$email'");

    if(mysqli_num_rows($loginn)>0){
            echo '<script language="javascript">
            window.alert("User sudah ada!");
            window.location.href="register.php";
            </script>';
    }else{
        if($password != $cpass){
            echo '<script language="javascript">
            window.alert("Password confirmation tidak sama!");
            window.location.href="register.php";
            </script>';

        }elseif(empty($email) or empty($username)){
            echo '<script language="javascript">
            window.alert("Form anda belum lengkap!");
            window.location.href="register.php";
            </script>';

        }else{
            mysqli_query($connect, "INSERT INTO dataadmin (username, password, email, level) values ('$username','$password','$email','$level')");
            header('location: login.php');
        }
    }
}


?>