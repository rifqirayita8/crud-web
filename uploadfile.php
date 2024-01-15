<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
    
    a{
        margin-left: 1px;
        margin-top: 15px;
    }
    body{
        background-image: linear-gradient(#2dbd6e, #a6f77b);
			background-size: cover;
            background-repeat: no-repeat;
			height: 100%;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Montserrat;
    }
    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 25px;
        width: 300px;
        
    }
</style>
</head>
<body>
    <div class="container">
	<form action="process-upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="upload" value="Upload">
	</form>
    <a href="subject.php" button type="button" class="btn btn-danger">KEMBALI</a>
    </div>
</body>
</html>