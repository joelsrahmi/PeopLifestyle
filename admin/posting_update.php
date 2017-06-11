<?php
include('connectdb.php');

//$username==form  $_POST["username"]==database
$date 		= date('dd-mm-yyyy H:i:s');
$judul 	    = $_POST["judul"];
$kriteria	= $_POST["kriteria"];
$artikel 	= $_POST["artikel"];
$id_posting = $_POST["id_posting"];//pake ini

$uploaddir	= 'temp\\';
$namafile	= basename ($_FILES ["gambar"]["name"]);
$uploadfile	= $uploaddir.$namafile;


if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadfile))
{
	$query_update ="update posting set judul='".$judul."', kriteria='".$kriteria."', artikel='".$artikel."', gambar='".$namafile."' where id_posting=".$id_posting;

	$list_posting = mysql_query($query_update);

	if(!$list_posting)
	{
		die("tidak dapat mengambil data : ".mysql_error());
	}
	header('location:admin_listposting.php');
}
else
{
	echo "GAGAL UPLOAD<br>";
	echo "Kembali ke <a href='admin_listposting.php'>List Posting</a><br>";
}

?>