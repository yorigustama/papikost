<style type="text/css">
    body{font-family:'Candara','Calibri',sans-serif; text-align: center; } 
 

input[type=text] {
    width: 500px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
 
input[type=text]:focus {
    width: 50%;
}



</style>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Papi Kost</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">


	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>




<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

         <?php
    require_once"../papikostfix2/assets/menu-nav-admin.php";?>
           

   </nav>
</div>
</section>
<!-- Blog section
================================================== -->
<form method="post" action="cari.php">
   
     

   
    <input class="btn btn-default"  type="button" value="kembali cari" onclick="window.location='main.php';">
</form>
<?php
include 'koneksi.php';


?>
    <?php
    $q=mysqli_query($kon,"select * from galeri where jenis='img' and {$_POST['pilih']} LIKE '%{$_POST['search']}%'" );
    while($tampil=mysqli_fetch_array($q)){
 echo '
 <table class="table table-condensed table-striped">
 <tr>
 <th width="150">Nama Kost</th>
 <th width="10">:</th>
 <td>'.$tampil['judul'].'</td>
 </tr>
 <tr>
 <th width="150">Harga</th>
 <th width="10">:</th>
 <td>'.$tampil['harga'].'/Bulan</td>
 </tr>
 <tr>
 <th>Jenis</th>
 <th>:</th>
 <td>'.$tampil['jk_3'].'</td>
 </tr>
 <tr>
 <th>Fasilitas</th>
 <th>:</th>
 <td>'.$tampil['fasilitas'].'</td>
 </tr>
 </table>
 <br>
 '; 
	
 }

 
 ?>
