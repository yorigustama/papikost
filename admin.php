
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
    require_once"../papikostfix/assets/menu-nav-admin.php";?>

   </nav>
</div>

	



<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" >Papi Kost</h1>
              <h3 class="wow fadeInUp" >Disini Tempatnya Mencari Kost Terbaik</h3>
          </div>
			</div>

		</div>
	</div>		
</section>

<!-- Blog section
================================================== -->
  
	
    <section id="blog">
   <div class="container">
      <div class="row">
	 <div align="right" style="padding-right: 20px;"><input class="btn btn-default"type="button" value="Tambah Kost Baru" onClick="window.location='form_img.php';"/></div> 
	
   <?php
include"koneksi.php";
if (empty($_GET['id'])){
	$max=mysqli_fetch_array(mysqli_query($kon,"select count(*) as count from galeri where jenis='img'"));
	if($max['count']>0){
		if(empty($_GET['h'])) $_GET['h']=1;
		$tlimit=10;
		$blimit=$_GET['h']*$tlimit-$tlimit;
		$maxh=ceil($max['count']/$tlimit);
		$q=mysqli_query($kon,"select * from galeri where jenis='img' order by id desc limit $blimit,$tlimit");
		?>
	
			
<?php
		while ($img=mysqli_fetch_array($q)) {
			?>

    

     		<div class="col-sm-6 col-md-6" >
         	  <div class="blog-thumb">
        		<div class="besarfoto">
         		   <a href="?id=<?=$img['id']?>"><img width="100" height="100" src="image/<?=$img['nama']?>" alt="Blog" ></a>
				  </div>
         		   <a href="?id=<?=$img['id']?>"><h1><?=$img['judul']?></h1></a>
         		     <div class="post-format">
						       <span class="fa fa-transgender"><?=$img['jk_3']?></a></span><br>
						     
						 
						 
					       </div>
        		    
         		     <a href="?id=<?=$img['id']?>" class="btn btn-default">Selengkapnya</a>
         		      <input class="btn btn-default" type="button" value="Edit" onClick="window.location='formedit_img.php?id=<?=$img['id']?>';"/>
			 <input class="btn btn-default" type="button" value="Hapus" onClick="window.location='proses_img.php?action=hapus&id=<?=$img['id']?>';" />
         	    </div>
	   </div>
     
		   
  <?php } ?>
<?php
}
	}else{
		$img=mysqli_fetch_array(mysqli_query($kon, "select * from galeri where jenis='img'and id={$_GET['id']}"));
		?>
		
	
			
				<img width="300" height="500" src="image/<?=$img['nama']?>"/>
			  	
				  <h1><?=$img['judul']?></h1></a>
         		     <div class="post-format">
						          <span class="fa fa-transgender"><?=$img['jk_3']?></a></span><br>
						        <span class="fa fa-money">Harga : <?=$img['harga']?>/bulan</span><br>
						          <span class="fa fa-home">Fasilitas : <?=$img['fasilitas']?></span><br> 
	   						<span class="fa fa-map-marker">Alamat : <?=$img['alamat']?></span> 
						 
						 
					       </div>
        		    
         		   <input class="btn btn-default" type="button" value="Kembali" onClick="window.location='admin.php';"/>
         		      <input class="btn btn-default" type="button" value="Edit" onClick="window.location='formedit_img.php?id=<?=$img['id']?>';"/>
			 <input class="btn btn-default" type="button" value="Hapus" onClick="window.location='proses_img.php?action=hapus&id=<?=$img['id']?>';" />
	
	<?php
	}
	?>

	</div>
	   </div>
</section>




<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

		<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" >Copyright © 2019 Papi Kost</p>
				<ul class="social-icon wow fadeInUp"  >
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>