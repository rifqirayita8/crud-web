<?php 
// mengaktifkan session
session_start();
 $_SESSION = [];
 session_unset();
// menghapus semua session
session_destroy();
 
setcookie('login', '', time() - 3600);
// mengalihkan halaman sambil mengirim pesan logout
header("location:login.php?pesan=logout");
exit;
?>