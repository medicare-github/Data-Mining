<?php
include '../connection/connection.php';
$query = "SELECT * FROM general_highsc";
$result = mysqli_query($con, $query);
$no = 1;
$mipa=0;
while ($data = mysqli_fetch_object($result)) :
    $mipa =$no++;
endwhile;