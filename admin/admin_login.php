<?php
include ('connectdb.php');

session_start();

//username==form  $_POST["id_admin"]==database
$date 		= date('dd-mm-yyyy H:i:s');
$username	= $_POST["username"];
$password	= $_POST["password"];

/*mysql_real_escape_string
 dipakai untuk mencegah sql injection(agar database lebih aman)
 */
$username	= mysql_real_escape_string($username);
$password	= mysql_real_escape_string($password);

//cek apakah data yg diinput kosong atau tidak
 if(empty($username) && empty($password))
 {
 	echo "Email dan password belum diisi!";
 	echo "<a href='admin_login.html'>Kembali ke halaman Login Admin</a>";
 	break;
 }
 else if(empty($username))
 {
 	echo "Email belum diisi!";
 	echo "<a href='admin_login.html'>Kembali ke halaman Login Admin</a>";
 	break;
 }
 else if(empty($password))
 {
 	echo "Password belum diisi!";
 	break;
 }

$qry = mysql_query("select * from admin where username='$username' and password='$password'");

if (mysql_num_rows($qry) == 1)
{
	$_SESSION['username'] = $username;
	//header berfungsi untuk mengarahkan ke halaman yg ditentukan
	header("location:admin_posting.html");
}
else
{
	//jika email dan password tidak terdaftar di db
	echo "Maaf data yang Anda isi salah atau belum terdaftar<br>";
	echo "<a href='admin_login.html'>Kembali ke halaman login admin</a>";
}
?>