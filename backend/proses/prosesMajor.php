<?php
// var_dump($_POST);
include '../connection/connection.php';
$nama=$_POST['nama'];
$mtk=$_POST['mtk'];
$kjr=$_POST['kjr'];
$bi=$_POST['bi'];
$bing=$_POST['bing'];
$jrsn=$_POST['jrsn'];

$query="INSERT INTO major_highsc (id,nama,matematika,kejuruan,bahasa_indo,bahasa_ing,jurusan) VALUES (Null,'$nama','$mtk','$kjr','$bi','$bing','$jrsn')";
if (mysqli_query($con,$query)) {
?>
    <script>
        alert ('data berhasil di simpan');
        document.location='../majorsch/MajorData.php';
    </script>

<?php
}else{
    ?>
    <script>
        alert ('Gagal di simpan');
        // document.location='../majorsch/MajorInput.php';
    </script>

<?php
}