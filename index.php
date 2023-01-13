<!DOCTYPE html>
<html>
<head>
	<!-- Judul -->
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
 	<!-- Pengambilan data dari database -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 	<!-- Tampilan kotak Login -->
	<div class="kotak_login">
		<p class="tulisan_login">Login</p><br>
		<div class="logobkad" align="center">
			<img src="dist/img/bkad.png" width="100" height="90" class="bkad">
		</div>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 			<!-- Tombol Login -->
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>