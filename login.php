<?php
session_start();

if (isset($_COOKIE['login'])){
	if($_COOKIE['login']== 'true'){
		$_COOKIE['login']= true;
	}
}

if (isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}


 
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		#kotak{
			font-size:28px;
			letter-spacing: 4px;
			font-family:Montserrat;
			padding-top: 30px;
			border-bottom: 2px solid #2dbd6e;
		}
		form{
			font-family:"Century Gothic", monospace;
		}
		.tombol{
			background: -webkit-linear-gradient( right, #a6f77b, #2dbd6e);
			text-align:center;
			color: white;
			padding:5px 5px;
			font-size:15px;
			cursor:pointer;
			border-radius:21px;
			font-family:"Century Gothic", monospace;
			border:none;
			width:150px;height:35px;
			box-shadow: 0px 1px 8px #24c64f;
			transition: 0.25s;
			margin-bottom: 15px;
			text-decoration: none;
		}
		.regis{
			background: -webkit-linear-gradient(#a6f77b, #2dbd6e);
			font-family: "Century Gothic", monospace;
			font-size: 15px;
			cursor: pointer;
			text-decoration: none;
			-webkit-background-clip: text;
			
		}
		body{
			background-image: linear-gradient(#2dbd6e, #a6f77b);
			background-size: cover;
			height: 100%;
			min-height: 100vh;
		}
		#bg0{
			border-radius: 8px;
			backdrop-filter: blur(10px);
			background-color: rgba(255, 255, 255, 0.5);
			margin: 5rem auto 6rem auto;
			width: 610px;
		}
		#bg1{
			border-radius: 8px;
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
			background: #fbfbfb;
			margin: 5rem auto 6rem auto;
			height: 390px;
			width: 410px;
			

		}
		#field1{
			text-align:center; 
			width:50%;
			height:90%;
			margin: 0rem auto 2rem auto;
			padding: 0px 10px;
			
		}
		.teks {
			border: none;
			background-color: transparent;
			font-family: "Century Gothic", monospace;
			border-bottom: 2px solid #2dbd6e;
			height: 2px;
			padding: 15px 10px;
			width: calc(100%-20px);
		}
		.pswd{
			border: none;
			background-color: transparent;
			font-family: "Century Gothic", monospace;
			border-bottom: 2px solid #2dbd6e;
			height: 2px;
			padding: 15px 10px;
			width: calc(100%-20px);
		}
		footer{
			text-align: center;
			font-size: 15px;
			font-family: "Century Gothic", monospace;
			backdrop-filter: blur(10px);
			background-color: rgba(255, 255, 255, 0.5);
			width: 610px;
			margin-left: 22.5rem;
		}
		#peteng{
			display: inline;
			border-color: rgba(255, 255, 255, 0.5);
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.5);
			font-family: Montserrat;
			border-radius: 4px;
			font-size: 15px;
		}
		.dark-mode{
			background-image: linear-gradient(#29011C, #100328);
			background-size: cover;
			height: 100%;
			min-height: 100vh;
			color: white;
			transition: 2s;
		}
		.dark-mode #bg1{
			background-image: linear-gradient(#100328, #29011C);
		}
		.dark-mode .teks{
			color: white;
		}
		.dark-mode .pswd{
			color: white;
		}

	</style>
	<link href="payung.png" rel="shortcut icon">
</head>
<body>
	<button onclick="myFunction()" id="peteng">Dark Mode</button>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
		if (isset($_POST['kuki'])){
			setcookie('login','true',time() +60);
		}
	}
	?>
	<br/>
	<br/>
	<div id="bg0">
	<div id="bg1">
	<fieldset id="field1">
	<legend id="kotak">Login akun</legend>
	<div id="container">
	<form method="post" action="cek_login.php">
		<br>
				<label>Username</label><br>
				<input type="text" name="username" class="teks">
				<br><br>
				<label>Password</label><br>
				<input type="password" name="password" class="pswd">
				<br><br>	
				<input type="submit" value="LOGIN" class="tombol"></td>	
				<br>
				<label>Remember me</label>
				<input type="checkbox" name="kuki" id="kuki">
				<br><br>
				<a href="register.php" class="regis">Belum punya akun?</a>

	</form>

</fieldset>
</div>
</div>
</div>
<script>
	function myFunction(){
		var element = document.body;
		element.classList.toggle("dark-mode");
	}
	document.getElementById("peteng").style.cursor="pointer";
</script>
<footer>
	<p>Rifqi Rayita D<p>
</footer>

</body>
</html>