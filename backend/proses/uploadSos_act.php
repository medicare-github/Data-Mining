<?php
include '../connection/connection.php';
include 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
$rowdata = $data->rowcount($sheet_index = 0);
$coldata = $data->colcount($sheet_index = 0);
$sukses = 0;
$gagal = 0;
$j = 2;
$tgl=date('d M Y H:o:s');
for ($i = 2; $i <= $rowdata; $i++) {
    $nama = $data->val($i, 2);
    $nim = $data->val($i, 3);
    $mtk = $data->val($i, 7);
    $sos = $data->val($i, 9);
    $geo = $data->val($i, 10);
    $eko = $data->val($i, 8);
    $bi = $data->val($i, 5);
    $bing = $data->val($i, 6);
    $jrsn = $data->val($i, 4);
    // $query = "INSERT INTO general_sch VALUES (Null,$nama,$matematika,$fisika,$kimia,$biologi,$bahasa_indo,$bahasa_ing,$jurusan)";
    mysqli_query($con,"INSERT INTO `generalsos_highsc` (`id`, `tgl_input`, `nama`, `nim`, `matematika`, `sosiologi`, `geograpy`, `ekonomi`, `bahasa_indo`, `bahasa_ing`, `jurusan`) VALUES (NULL, '$tgl', '$nama', '$nim', '$mtk', '$sos', '$geo', '$eko', '$bi', '$bing', '$jrsn');");
}
?>
<script>
    alert("Data berhasil di upload");
    document.location='../generalsch/SosData.php'; 
</script>
<?php

