<?php
//memulai session
session_start();
include('connectdb.php');

//$username=dari form  $_POST["username"]=database
$username	= $_POST["username"];
$password	= $_POST["password"];

$query_login	= "select * from member where username='".$username."' and password='".$password."' ";

$cek_login	= mysql_query($query_login);

if(mysql_num_rows($cek_login)==0)
{
	//jika salah kembali ke halaman login
	require("signin.html");
}
else
{
	while($row = mysql_fetch_assoc($cek_login))
	{
		$username	= $row["username"];
		$user_type	= $row["tipe"];

		$_SESSION["username"]	= $username;
		$_SESSION["usertype"]	= $user_type;
		$_SESSION["status_log"]	= true;
	}

	if($user_type==1)
	{
		header('location:admin/admin_listposting.php');
	}
	else if($user_type==2)
	{
		header('location:index.php');
	}
	else
	{
		require("signin.html");
		break;
	}
}
?>