<?php
$hostname="localhost";
$username="root";
$password="";
$database="datasetmining";


$con=mysqli_connect($hostname,$username,$password,$database);

if ($con->connect_error) {
    echo "Gagal Terkoneksi karen ERROR pada :".mysqli_error($con);
}else{
    // echo "berhasil";
}