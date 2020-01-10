<?php
include '../connection/connection.php';
if ($_GET == null) {
    # code...
    $ab = $temp[] = '';
} else {
    $mtk = filter_var($_GET["mtk"], FILTER_VALIDATE_FLOAT);
    $sos = filter_var($_GET["sos"], FILTER_VALIDATE_FLOAT);
    $geo = filter_var($_GET["geo"], FILTER_VALIDATE_FLOAT);
    $eko = filter_var($_GET["eko"], FILTER_VALIDATE_FLOAT);
    $bi = filter_var($_GET["bi"], FILTER_VALIDATE_FLOAT);
    $bing = filter_var($_GET["bing"], FILTER_VALIDATE_FLOAT);
    // var_dump($mtk);
    // var_dump($sos);
    // var_dump($geo);
    // var_dump($mtk);
    // var_dump($eko);
    // var_dump($bi);
    // var_dump($bing);

    $query = "SELECT matematika,sosiologi,geograpy,ekonomi,bahasa_indo,bahasa_ing,jurusan FROM generalsos_highsc";
    $result = mysqli_query($con, $query);
    $temp[] = '';
    $jrsn = '';
    while ($data = mysqli_fetch_object($result)) :

        $a = $data->matematika;
        $b = $data->sosiologi;
        $c = $data->geograpy;
        $d = $data->ekonomi;
        $e = $data->bahasa_indo;
        $f = $data->bahasa_ing;
        $jrsn = $data->jurusan;
        $hasil = sqrt((pow(($a - $mtk), 2)) + (pow(($b - $sos), 2)) + (pow(($c - $geo), 2)) + (pow(($d - $eko), 2)) + (pow(($e - $bi), 2)) + (pow(($f - $bing), 2)));
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
        $ab=$temp[1]." (Rekomendasi Pertama) "."<br>".$temp[2]." (Rekomendasi Kedua)";
        return $ab;
    }
    $ab=$temp[1];

    
}
