<?php
include 'koneksi.php';
if($_GET['action']=='edit' || $_GET['action']=='tambah'){
	$path="image/";//folder buat menyimpan file gambar
	$file=$_FILES['nama']['name'];
	$temp=$_FILES['nama']['tmp_name'];
	if($_GET['action']=='edit'){
		$d=mysqli_fetch_array(mysqli_query($kon, "select * from galeri where jenis='img' and id='{$_GET['id']}'"));
		unlink ("image/".$d['nama']);
	}
	move_uploaded_file($temp,$path.$file);
}
if($_GET['action']=='tambah'){
	mysqli_query($kon,"insert into galeri values (default, '$file', '{$_POST['judul']}','{$_POST['alamat']}','{$_POST['keterangan']}','{$_POST['harga']}','{$_POST['jk_3']}','{$_POST['fasilitas']}',now(),'img')");
}
if($_GET['action']=='edit'){
	mysqli_query($kon, "update galeri set nama='$file',judul='{$_POST['judul']}',alamat='{$_POST['alamat']}',keterangan='{$_POST['keterangan']}',harga='{$_POST['harga']}',jk_3='{$_POST['jk_3']}',fasilitas='{$_POST['fasilitas']}' where id={$_GET['id']}");
	mysqli_query($q);
}if ($_GET['action']=='hapus'){
	$d=mysqli_fetch_array(mysqli_query($kon,"select * from galeri where jenis='img' and id='{$_GET['id']}'"));
	unlink("image/".$d['nama']); {
		mysqli_query($kon, "delete from galeri where jenis='img' and id='{$_GET['id']}'");
	}
}
header("location:admin.php");
?>