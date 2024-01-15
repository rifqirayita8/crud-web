<?php
    session_start();
	require 'process-register.php';
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register Member - PHP</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<style>

		a{text-decoration: none; font-size: 20px; padding: 5px 10px;}
		ul{padding: 14px;}
		li{list-style: none; display: inline;}
		li a{background: #222; color: #d4d4d4;}
		li a: hover{background: #4da4ff; color: #fff;}

		body{
			font-family: Montserrat;
			background: linear-gradient(#a6f77b, #2dbd6e);
			min-height: 100vh;
		}
		.card{
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
			margin-bottom: 50px;
		}
		</style>
		<link href="payung.png" rel="shortcut icon">
    </head>
    <body>

					<!--
					
					if(mysqli_num_rows($result) > 0){
						$error[] = 'user already exist!';
					 }else{
						if($pw != $password_confirmation){
						   $error[] = 'password not matched!';
						}else{
						   $insert = "INSERT INTO dataadmin(username, email, pw) VALUES('$username','$email','$pw')";
						   mysqli_query($conn, $insert);
						   header('Location: login.php');
						   exit();
						}
					 }
					-->
    				
					
	<nav class="navi">
		<ul>
		<li></li>
		</ul>
	</nav>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-4 offset-md-4 mt-5">
    				
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register Form</h1>
    					</div>
    					<div class="card-body">
    						<form action="#!" method="post">
                                <div class="form-group">
    								<label for="username">e-mail</label>
    								<input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="email" autocomplete="off">
    							</div>
                                <div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" minlength="8" maxlength="16" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" minlength="8" placeholder="Password">
    							</div>
								<div class="form-group">
    								<label for="password">Password Confirmation</label>
    								<input type="password" name="cpass" class="form-control" id="cpass" placeholder="konfirmasi password">
    							</div>
								<div class="form-group">
									<label for="level">Status</label>
									<select name="level" class="form-control" id="level">
									<option value="Mahasiswa">Mahasiswa</option>
									<option value="Dosen">Dosen</option>
								</select>
								</div>
    							<input name="register" id="register" class="btn btn-primary" type="submit" value="Register">
								<a href="login.php" button type="button" class="btn btn-danger">KEMBALI</a>
							</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
    <?php
    session_destroy();
    ?>