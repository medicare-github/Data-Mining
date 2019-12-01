<?php
include '../connection/connection.php';
$query = "SELECT * FROM generalsos_highsc";
$result = mysqli_query($con, $query);
$no = 1;
$sos=0;
while ($data = mysqli_fetch_object($result)) :
    $sos =$no++;
endwhile;