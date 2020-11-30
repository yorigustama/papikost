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

	



<!-- Header section
================================================== -->
<center>
<form action="" method="post">
<input type="text" id="searchquery" size="60" name="keyword" placeholder="Search..." />
<input type="submit" id="searchbutton" value="Search" name="Search" class="formbutton" />
</form>
<?php
//koneksi
$koneksi = new mysqli('localhost','root','','papikost');
if (isset($_POST['Search'])){
    //variable
    $keyword = $_POST['keyword'];
    $query = $koneksi->query("SELECT * FROM galeri WHERE judul LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR keterangan LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR jk_3 LIKE '%$keyword%' OR fasilitas LIKE '%$keyword%'");
    $row = mysqli_num_rows($query);
    //cek apakah ada satu  
    if ($row==0){
        ?>
        <center><h3>Kost Tidak Dapat Ditemukan, Silahkan Cari lagi.</h3></center>
        <?php  
    }
    else{
        ?>
        <center><h3>menampilkan <?php echo $row;?> data kost.</h3></center>
        <?php
        ?>
        <table width="800px">
        <tr class="nol" style="height: 50px; background-color: #00CED1">
                <td align="center" class="main">NO</td>
                <td align="center" class="main">Nama Kos</td>
                <td align="center" class="main">Alamat</td>
                <td align="center" class="main">Keterangan</td>
                <td align="center" class="main">Harga</td>
                <td align="center" class="main">Tipe Kost</td>
                <td align="center" class="main">Fasilitas</td>
        </tr>
        <?php
        foreach ($query as $rows){
        @$no++;
        $judul = $rows['judul'];
        $alamat= $rows['alamat'];
        $keterangan = $rows['keterangan'];
        $harga = $rows['harga'];
        $jk_3 = $rows['jk_3'];
        $fasilitas = $rows['fasilitas'];
       
        ?>
        <tr class="nol1">
        <td align="center" class="td" ><?php echo $no;?></td>
        <td align="center" class="td"><?php echo $judul;?></td>
        <td align="center" class="td"><?php echo $alamat;?></td>
        <td align="center" class="td"><?php echo $keterangan;?></td>
        <td align="center" class="td"><?php echo $harga;?></td>
        <td align="center" class="td"><?php echo $jk_3;?></td>
        <td align="center" class="td"><?php echo $fasilitas;?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
?>
</center>




<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
