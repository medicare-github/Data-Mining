<?php
include '../connection/connection.php';
include 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
$rowdata = $data->rowcount($sheet_index = 0);
$coldata = $data->colcount($sheet_index = 0);
$sukses = 0;
$gagal = 0;
$j = 2;
for ($i = 2; $i <= $rowdata; $i++) {
    $nama = $data->val($i, 2);
    $mtk = $data->val($i, 3);
    $fsk = $data->val($i, 4);
    $kma = $data->val($i, 5);
    $bgi = $data->val($i, 6);
    $bi = $data->val($i, 7);
    $bing = $data->val($i, 8);
    $jrsn = $data->val($i, 9);
    // $query = "INSERT INTO general_sch VALUES (Null,$nama,$matematika,$fisika,$kimia,$biologi,$bahasa_indo,$bahasa_ing,$jurusan)";
    mysqli_query($con,"INSERT INTO general_highsc (id,nama,matematika,fisika,kimia,biologi,bahasa_indo,bahasa_ing,jurusan) VALUES (Null,'$nama','$mtk','$fsk','$kma','$bgi','$bi','$bing','$jrsn')");
}
?>
<script>
    alert("Data berhasil di upload");
    document.location='../generalsch/Mipadata.php'; 
</script>
<?php

