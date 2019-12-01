<?php
// var_dump($_POST);
include '../connection/connection.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$mtk = $_POST['mtk'];
$sos = $_POST['sos'];
$geo = $_POST['geo'];
$eko = $_POST['eko'];
$bi = $_POST['bi'];
$bing = $_POST['bing'];
$jrsn = $_POST['jrsn'];

$query = "UPDATE `generalsos_highsc` SET `nama` = '$nama', `matematika` = '$mtk',`sosiologi` = '$sos', `geograpy` = '$geo', `ekonomi` = '$eko', `bahasa_indo` = '$bi', `bahasa_ing` = '$bing', `jurusan` = '$jrsn' WHERE `generalsos_highsc`.`id` = $id;";
if (mysqli_query($con, $query)) {
    ?>
    <script>
        alert('data berhasil di Edit');
        document.location = '../generalsch/SosData.php';
    </script>

<?php
} else {
    ?>
    <script>
        alert('data berhasil di Edit');
        document.location = '../generalsch/SosData.php';
    </script>

<?php
}
