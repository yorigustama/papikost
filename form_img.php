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

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                         <li><a href="admin.php">Home</a></li>
							<li><a href="about.php">About</a></li>
                       	 <li><a href="contact.php">Contact</a></li>
                    
			</div>
		</form>
		
			
			
		
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>

  <!-- Header section
================================================== -->

  <section id="contact">
   <div class="container">
      <div class="row">

<form action="proses_img.php?action=tambah"method="post"
enctype="multipart/form-data">
</br>
<div class="contact-form">
				<form id="contact-form" method="post" action="#">
					<input name="judul" type="text" class="form-control" placeholder="Nama Kost" required>
					<input name="harga" type="text" class="form-control" placeholder="Harga per bulan" required>
					<input name="fasilitas" type="textarea" class="form-control" placeholder="Fasilitas" required>
					<input name="alamat" type="textarea" class="form-control" placeholder="Alamat" required>
					
					
					   
              	 <input type="radio" name="jk_3" value="Laki-Laki"> Laki-Laki<br>
			  <input type="radio" name="jk_3" value="Perempuan" checked> Perempuan
					
					<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="4" required></textarea>
					<input name="MAX_FILE_SIZE" value="50000000"
							type="hidden"/>
							
							<input name="nama" size="37" type="file" formenctype="multipart/form-data">
					<input type="button" value="kembali" onclick="window.location='admin.php';"class="btn btn-default"/>
								<button type="submit" class="btn btn-default">Simpan</button>
								<button type="reset" class="btn btn-default">Ulangi</button>
				
			</div>
	
						
					
							
								
		

</form>

      </div>
   </div>
</section>
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>