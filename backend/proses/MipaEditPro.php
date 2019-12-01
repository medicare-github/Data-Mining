<?php
// var_dump($_POST);
include '../connection/connection.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$mtk=$_POST['mtk'];
$fsk=$_POST['fsk'];
$kma=$_POST['kma'];
$bgi=$_POST['bgi'];
$bi=$_POST['bi'];
$bing=$_POST['bing'];
$jrsn=$_POST['jrsn'];

$query="UPDATE `general_highsc` SET `nama` = '$nama', `matematika` = '$mtk', `fisika` = '$fsk', `kimia` = '$kma', `biologi` = '$bgi', `bahasa_indo` = '$bi', `bahasa_ing` = '$bing', `jurusan` = '$jrsn' WHERE `general_highsc`.`id` = $id;";
if (mysqli_query($con,$query)) {
?>
    <script>
        alert ('data berhasil di Edit');
        document.location='../generalsch/Mipadata.php';
    </script>

<?php
}else{
   echo "error";

}