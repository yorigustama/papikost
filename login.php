<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login</title>
</head>

<body>
<div align="center" class="container">
	<?php
	if(isset($_GET["login_gagal"])){
	?>
	<div class="notifikasi">login gagal!<br> username atau password salah</div>
	<?php
	}
	?>
	<div class="login-form">
		<form method="post" action="validasi.php">
			<div class="input">
				<div> <input type="text" class="element-input" name="username" placeholder="Username" required> </div>
			</div>
			<div class="input">
				<div> <input type="password" class="element-input" name="password" placeholder="Password" required> </div>
			</div>
			<div class="input">
				<div align="center"> <button type="submit" name="login" class="button-login">Login</button></div>
			</div>
		</form>
	</div>
	<br>
</div>
</body>
</html>