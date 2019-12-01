<?php
// var_dump($_POST);
include '../connection/connection.php';
$nama=$_POST['nama'];
$mtk=$_POST['mtk'];
$fsk=$_POST['fsk'];
$kma=$_POST['kma'];
$bgi=$_POST['bgi'];
$bi=$_POST['bi'];
$bing=$_POST['bing'];
$jrsn=$_POST['jrsn'];

$query="INSERT INTO general_highsc (id,nama,matematika,fisika,kimia,biologi,bahasa_indo,bahasa_ing,jurusan) VALUES (Null,'$nama','$mtk','$fsk','$kma','$bgi','$bi','$bing','$jrsn')";
if (mysqli_query($con,$query)) {
?>
    <script>
        alert ('data berhasil di simpan');
        document.location='../generalsch/Mipadata.php';
    </script>

<?php
}else{
    ?>
    <script>
        alert ('Gagal di simpan');
        document.location='../generalsch/Mipainput.php';
    </script>

<?php
}