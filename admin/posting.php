<?php
include ('connectdb.php');

//$username==form  $_POST["username"]==database
$date 		= date('dd-mm-yyyy H:i:s');
$judul 	    = $_POST["judul"];
$kriteria	= $_POST["kriteria"];
$artikel 	= $_POST["artikel"];

$uploaddir	= "temp\\";
$namafile	= basename ($_FILES ["gambar"]["name"]);
$uploadfile	= $uploaddir.$namafile;

if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadfile))
{
	echo "SUKSES UPLOAD<br>";
}
else
{
	echo"GAGAL UPLOAD <br>";
	echo"Kembali ke <a href='admin_posting.html'>halaman posting</a><br>";
}
	//koneksi ke db
	$query_insert = "insert into posting(date, judul, kriteria, artikel, gambar)"."values(NOW(),'".$judul."','".$kriteria."','".$artikel."','".$namafile."')";

	$hasil_tambah	= mysql_query($query_insert);
	if($hasil_tambah)
	{
		header('location:admin_listposting.php');
	}
	else
	{
		echo "Gagal Memasukkan Data : ".mysql_error()."<br>";
		echo"Kembali ke <a href='admin_posting.html'>Halaman Posting</a><br>";
	}

?>