<?php
include('connectdb.php');

//$username==form  $_POST["username"]==database
$komentar	= $_POST["komentar"];
$tgl		= date('dd-mm-yyyy H:i:s');
$id_posting	= $_POST["id_posting"];
$username	= $_POST["username"];

$query_komentar = "insert into komentar (id_posting, username, komentar, tgl)"."values('".$id_posting."','".$username."','".$komentar."',NOW())";

$hasil_insert	= mysql_query($query_komentar);

if($hasil_insert)
{
	echo "Berhasil Menambahkan Komentar!<br>";
	echo "Kembali ke <a href='index.php'>Home</a>";
}

else
{
	echo "Gagal Memasukkan Komentar<br>".mysql_error();
	echo "Kembali ke <a href='index.php'>Home</a>";
}
?>