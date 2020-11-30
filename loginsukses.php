<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../kuliah/style.css">
<title>Logina Sukses</title>
</head>

<body bgcolor=#11C2DF>
<div class="container">
	<div class="login-form">
		<?php
		ob_start();
		session_start();
		ob_end_clean();
		if(isset($_SESSION["username"])){
		?>
		HEADER
		<br>
		<form method="post" action="log-out.php">
		
			<div class="input">
				<button type="submit" class="button-logout">Logout</button>
			</div>
				<a href="home.php">Home</a>
				<a href="rumus.php">Rumus</a>
		</form>
	

		<?php
		}
		else
		{
			header("location:index.php?login_gagal");
		}
		?>
	</div>
</div>
</body>
</html>