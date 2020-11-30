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

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="admin.php">Papi Kost</a>
              </div>

            
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>

  <!-- Header section
================================================== -->

<?php
include"koneksi.php";
$q=mysqli_query($kon, "select * from galeri where jenis='img' and id={$_GET['id']}");
$img=mysqli_fetch_array($q);
$action='edit';
?>
<form
class="form-horizontal" action="proses_img.php?&action=<?=$action?>&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
  
            <div class="form-group">
                <label class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-4">
                    <input type="textarea" name="judul" class="form-control" placeholder="<?=$img["judul"]?>"  required>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-4">
                    <input type="textarea" name="harga" class="form-control" placeholder="<?=$img["harga"]?>" required>
                </div>
            </div>
			<div class="form-group">
                <label class="col-sm-2 control-label">Fasilitas</label>
                <div class="col-sm-4">
                    <input type="textarea" name="fasilitas" class="form-control" placeholder="<?=$img["fasilitas"]?>" required>
                </div>
            </div>
	 		<div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-4">
                    <input type="textarea" name="alamat" class="form-control" placeholder="<?=$img["alamat"]?>" required>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
              	 <input type="radio" name="jk_3" value="Laki-laki"> Laki-Laki<br>
			  <input type="radio" name="jk_3" value="Perempuan" checked> Perempuan
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-4">
                    <input type="textarea" name="keterangan" class="form-control" placeholder="<?=$img["keterangan"]?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">File lama</label>
                <div class="col-sm-4">
                    <input  name="nama" class="form-control" placeholder="<?=$img["nama"]?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">File</label>
                <div class="col-sm-4">
                    <input type="file" name="nama" class="form-control" placeholder="<?=$img["nama"]?>" required>
                </div>
            </div>
      
            
 
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="button" value="Kembali" onclick="window.location='admin.php';" class="btn btn-default"/>
						<button type="submit" class="btn btn-default">Simpan</button>
						<button type="reset" class="btn btn-default">Ulangi</button>
                </div>
            </div>
        </form>
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>