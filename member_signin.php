<?php

include ('connectdb.php');

session_start();//memulai session

//$username=dari form  $_POST["username"]=database
$username = $_POST["username"];
$password = $_POST["password"];

/*mysql_real_escape_string
 dipakai untuk mencegah sql injection(agar database lebih aman)
 */
 $username	= mysql_real_escape_string($username);
 $password	= mysql_real_escape_string($password);

//cek apakah data yg diinput kosong atau tidak
 if(empty($username) && empty($password))
 {
 	echo "Email dan password belum diisi!";
 	break;
 }
 else if(empty($username))
 {
 	echo "Email belum diisi!";
 	break;
 }
 else if(empty($password))
 {
 	echo "Password belum diisi!";
 	break;
 }

$qry = mysql_query("select * from member where username='$username' and password='$password'");

if (mysql_num_rows($qry) == 1)
{
	//jika email dan password sudah terdaftar di db maka session akan dibuat
	$_SESSION['username'] = $username;

	//header berfungsi untuk mengarahkan ke halaman yg ditentukan
	header("location:index.php");
}
else
{
	//jika email dan password tidak terdaftar di db
	echo "Maaf data yang Anda isi belum terdaftar<br>";
	echo "<a href='signin.html'>Kembali ke halaman signin</a>";
}
?>