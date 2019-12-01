<?php
// var_dump($_POST);
include '../connection/connection.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$mtk = $_POST['mtk'];
$kjr = $_POST['kjr'];
$bi = $_POST['bi'];
$bing = $_POST['bing'];
$jrsn = $_POST['jrsn'];

$query = "UPDATE `major_highsc` SET `nama` = '$nama', `matematika` = '$mtk',`kejuruan` = '$kjr', `bahasa_indo` = '$bi', `bahasa_ing` = '$bing', `jurusan` = '$jrsn' WHERE `major_highsc`.`id` = $id;";
if (mysqli_query($con, $query)) {
    ?>
    <script>
        alert('data berhasil di Edit');
        document.location = '../majorsch/MajorData.php';
    </script>

<?php
} else {
    ?>
    <script>
        alert('data berhasil di Edit');
        document.location = '../majorsch/MajorData.php';
    </script>

<?php
}
