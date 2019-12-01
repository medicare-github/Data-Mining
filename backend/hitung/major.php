<?php
include '../connection/connection.php';
$query = "SELECT * FROM major_highsc";
$result = mysqli_query($con, $query);
$no = 1;
$major=0;
while ($data = mysqli_fetch_object($result)) :
    $major =$no++;
endwhile;