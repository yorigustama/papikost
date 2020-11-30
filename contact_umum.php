
<?php
include("config.php");
?>
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

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

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
    require_once"../papikostfix/assets/menu-nav.php";?>
   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class= >Kontak Kami</h1>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="col-md-6 col-sm-12" >
         	<div class="google_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3342050167735!2d110.35240391422063!3d-7.754333579039213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a588ab520e7cf%3A0x36a6468c29d0b69e!2sUnnamed+Road%2C+Gedongan%2C+Sinduadi%2C+Mlati%2C+Sleman+Regency%2C+Special+Region+of+Yogyakarta+55284!5e0!3m2!1sid!2sid!4v1545059597655" width="520" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="col-md-6 col-sm-12" >
			<h1>Kritik Saran Untuk Web Kami</h1>
			<div class="contact-form">
				<form id="contact-form" method="post" action="#">
					<input name="nama" type="text" class="form-control" placeholder="Nama Kamu" required>
					<input name="email" type="" class="form-control" placeholder="Email" required>
					<textarea name="pesan" class="form-control" placeholder="Pesan" rows="4" required></textarea>
					<div class="contact-submit">
						<input type="submit" name="submit" class="form-control submit" value="Kirim Pesan">
						<input type="button" value="kembali" onclick="window.location='umum.php';" class="form-control submit"/>
					</div>
				</form>
			</div>
		</div>
 <?php
        //definisikan variabel untuk tiap-tiap inputan
        $nama       = $koneksi->real_escape_string($_POST['nama']);
        $email      = $koneksi->real_escape_string($_POST['email']);
        $pesan      = $koneksi->real_escape_string($_POST['pesan']);
        $tanggal    = date('Y-m-d');
        
 //jika di klik tombol kirim pesan menjalankan script di bawah ini
 if($_POST['submit']){
 $input = $koneksi->query("INSERT INTO bukutamu(tanggal,nama,email,pesan) VALUES('$tanggal','$nama','$email','$pesan')") or die($koneksi->error);
 if($input){
 echo '<div class="alert alert-success">Pesan anda berhasil di simpan!</div>';
 }else{
 echo '<div class="alert alert-warning">Gagal menyimpan pesan!</div>';
 }
 }
        ?>
		  <hr />
 <h2>5 Buku tamu terakhir</h2>
 
 <?php
 //menampilkan 5 buku tamu terbaru
 $res = $koneksi->query("SELECT * FROM bukutamu ORDER BY id DESC LIMIT 5") or die($koneksi->error);
 
 if($res->num_rows){
 while($row = $res->fetch_assoc()){
 echo '
 <table class="table table-condensed table-striped">
 <tr>
 <th width="150">TANGGAL TULIS</th>
 <th width="10">:</th>
 <td>'.$row['tanggal'].'</td>
 </tr>
 <tr>
 <th width="150">NAMA LENGKAP</th>
 <th width="10">:</th>
 <td>'.$row['nama'].'</td>
 </tr>
 <tr>
 <th>EMAIL</th>
 <th>:</th>
 <td>'.$row['email'].'</td>
 </tr>
 <tr>
 <th>PESAN</th>
 <th>:</th>
 <td>'.$row['pesan'].'</td>
 </tr>
 </table>
 <br>
 ';
 }
 }else{
 echo 'Belum ada data buku tamu';
 }
 
 ?>
		<div class="clearfix"></div>

			<div class="col-md-4 col-sm-4">
				<div class=" media" >
					<div class="media-object pull-left">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Phone</h3>
						<p>027400887</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				
					<div class="media-object pull-left">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Email</h3>
						<p>papikost@company.com</p>
					</div>
				</div>


			<div class="col-md-4 col-sm-4">
			
					<div class="media-object pull-left">
						<i class="fa fa-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Alamat</h3>
						<p>Mlati, Sinduadi, Sleman<br>
                        </p>
					</div>
				</div>
			
      </div>
   </div>
</section>

 

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
			Copyright © 2019 Papi Kost</p>
				<ul class="social-icon "  >
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