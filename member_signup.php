<?php
include ('connectdb.php');

//$username==form  $_POST["username"]==database

//$date_time(date_now) = $_POST["date_time"];
$username 	= $_POST["username"];
$email 		= $_POST["email"];
$password 	= $_POST["password"];
$pertanyaan = $_POST["pertanyaan"];
$jawaban 	= $_POST["jawaban"];

$stop		= 0;

if(empty($username) || empty($email) || empty($password) || empty($jawaban))
 {
 	echo "Data yang anda isi belum lengkap!<br>";
 	echo "<a href='signup.html'>Kembali ke SignUp</a>";
 	$stop = 1;
 }
 
$sql 		= "SELECT username,email FROM member";//validasi duplikat data

	$qry = mysql_query($sql);
	while($row = mysql_fetch_array($qry)){
		if($username == $row['username']){
			echo "Username $username telah digunakan oleh pengguna lain<br>";
			echo "Silahkan kembali dan masukkan username yang lain<br>";
			echo "<a href='signup.html'>Kembali ke SignUp</a>";
			$stop = 1;
			break;
		}
		else if($email == $row['email']){
			echo "Email $email telah digunakan oleh pengguna lain<br>";
			echo "Silahkan kembali ke dan masukkan email yang lain<br>";
			echo "<a href='signup.html'>Kembali ke SignUp</a>";
			$stop = 1;
			break;
		}

	}

	if($stop==0){
		$tipe = '2';
		$sql  = "insert into member(date, tipe, username, email, password, pertanyaan, jawaban)"."values(NOW(), '".$tipe."','".$username."','".$email."','".$password."','".$pertanyaan."','".$jawaban."')";
		$qry = mysql_query($sql) or die("Query Salah : ".mysql_error());
		echo "Akun Anda Telah Berhasil Didaftarkan";
		echo "<br><a href='signin.html'>Klik Disini</a> untuk Login";
	}

		mysql_close($open);//tutup koneksi MySQL

?>