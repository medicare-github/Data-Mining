<?php
// var_dump($_POST);
include '../connection/connection.php';
$nama=$_POST['nama'];
$mtk=$_POST['mtk'];
$sos=$_POST['sos'];
$geo=$_POST['geo'];
$eko=$_POST['eko'];
$bi=$_POST['bi'];
$bing=$_POST['bing'];
$jrsn=$_POST['jrsn'];

$query="INSERT INTO generalsos_highsc (id,nama,matematika,sosiologi,geograpy,ekonomi,bahasa_indo,bahasa_ing,jurusan) VALUES (Null,'$nama','$mtk','$sos','$geo','$eko','$bi','$bing','$jrsn')";
if (mysqli_query($con,$query)) {
?>
    <script>
        alert ('data berhasil di simpan');
        document.location='../generalsch/SosData.php';
    </script>

<?php
}else{
    ?>
    <script>
        alert ('Gagal di simpan');
        document.location='../generalsch/SosInput.php';
    </script>

<?php
}