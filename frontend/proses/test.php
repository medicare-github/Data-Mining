<?php
include '../connection/connection.php';
if ($_GET == null) {
    # code...
    $ab = $temp[] = '';
} else {
    $mtk = filter_var($_GET["mtk"], FILTER_VALIDATE_FLOAT);
    $fsk = filter_var($_GET["fsk"], FILTER_VALIDATE_FLOAT);
    $kma = filter_var($_GET["kma"], FILTER_VALIDATE_FLOAT);
    $bgi = filter_var($_GET["bgi"], FILTER_VALIDATE_FLOAT);
    $bi = filter_var($_GET["bi"], FILTER_VALIDATE_FLOAT);
    $bing = filter_var($_GET["bing"], FILTER_VALIDATE_FLOAT);
    var_dump($mtk);
    var_dump($fsk);
    var_dump($kma);
    var_dump($mtk);
    var_dump($bgi);
    var_dump($bi);
    var_dump($bing);
    echo "<br>";

    $query = "SELECT matematika,fisika,kimia,biologi,bahasa_indo,bahasa_ing,jurusan FROM general_highsc";
    $result = mysqli_query($con, $query);
    $temp[] = '';
    $jrsn = '';
    while ($data = mysqli_fetch_object($result)) :

        $a = $data->matematika;
        $b = $data->fisika;
        $c = $data->kimia;
        $d = $data->biologi;
        $e = $data->bahasa_indo;
        $f = $data->bahasa_ing;
        $jrsn = $data->jurusan;
        $hasil = sqrt((pow(($a - $mtk), 2)) + (pow(($b - $fsk), 2)) + (pow(($c - $kma), 2)) + (pow(($d - $bgi), 2)) + (pow(($e - $bi), 2)) + (pow(($f - $bing), 2)));
        $temp[] = $hasil . "-" . $jrsn;


    endwhile;
    for ($i=0; $i <count($temp) ; $i++) { 
        # code...
        echo $temp[$i];
        echo "<br>";
    }
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
        return $temp;
    }
    
    print_r(bubble_sort($temp));
    // $abc=explode("-",print_r(bubble_sort($temp)));
    // echo $abc[0];
    
}
