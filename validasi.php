<?php
ob_start();
session_start();
ob_end_clean();
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="papi" and $password=="1")
{
	$_SESSION["username"]=$username;
	header("location:admin.php");
}else{
	header("location:login.php?login_gagal");
}
?>