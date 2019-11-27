<?php
include '../connection/connection.php';
if ($_GET == null) {
    # code...
    $ab = $temp[] = '';
} else {
    $mtk = filter_var($_GET["mtk"], FILTER_VALIDATE_FLOAT);
    $bi = filter_var($_GET["bi"], FILTER_VALIDATE_FLOAT);
    $bing = filter_var($_GET["bing"], FILTER_VALIDATE_FLOAT);
    $kjr = filter_var($_GET["kjr"], FILTER_VALIDATE_FLOAT);
    // var_dump($mtk);
    // var_dump($fsk);
    // var_dump($kma);
    // var_dump($mtk);
    // var_dump($bgi);
    // var_dump($bi);
    // var_dump($bing);

    $query = "SELECT matematika,bahasa_indo,bahasa_ing,kejuruan,jurusan FROM major_highsc";
    $result = mysqli_query($con, $query);
    $temp[] = '';
    $jrsn = '';
    while ($data = mysqli_fetch_object($result)) :

        $a = $data->matematika;
        $e = $data->bahasa_indo;
        $f = $data->bahasa_ing;
        $g = $data->kejuruan;
        $jrsn = $data->jurusan;
        $hasil = sqrt((pow(($a - $mtk), 2)) + (pow(($e - $bi), 2)) + (pow(($f - $bing), 2))+(pow(($g - $kjr), 2)));
        $temp[] = $hasil." - ".$jrsn;


    endwhile;
    // for ($i=0; $i <count($temp) ; $i++) { 
    //     # code...
    //     echo $temp[$i];
    // }
    
?>
<?php
    function bubble_sort($temp)
    {
        $n = count($temp);
        for ($i = 0; $i < $n; $i++) {
            for ($j = $n - 1; $j > $i; $j--) {
                if ($temp[$j] < $temp[$j - 1]) {
                    $dummy = $temp[$j];
                    $temp[$j] = $temp[$j - 1];
                    $temp[$j - 1] = $dummy;
                }
            }
        }
        return $temp[1];
    }
    $ab=$temp[1];

    
}
