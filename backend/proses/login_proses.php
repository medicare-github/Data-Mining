<?php
include "../connection/connection.php";
$username	= ($_POST['user']);
$password	= ($_POST['pass']);
$data = mysqli_query($con,"select * from admin where username='$username' and pass='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../generalsch/general.php");
}else{
	header("location:../index.php?pesan=gagal");
}
?>