<?php
$hostname	= "localhost";
$username	= "root";
$password	= "";
$database	= "datasetmining";
$con = mysqli_connect($hostname, $username, $password, $database);
if ($con->connect_error) {
	echo "Koneksi Gagal, Error : ".mysqli_error($con);
}