<?php
include '../connection/connection.php';
include 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
$rowdata = $data->rowcount($sheet_index = 0);
$coldata = $data->colcount($sheet_index = 0);
$sukses = 0;
$gagal = 0;
$j = 2;
$tgl=date('d M Y H:i:s');
for ($i = 2; $i <= $rowdata; $i++) {
    $nama = $data->val($i, 2);
    $nim = $data->val($i, 3);
    $mtk = $data->val($i, 7);
    $fsk = $data->val($i, 8);
    $kma = $data->val($i, 9);
    $bgi = $data->val($i, 10);
    $bi = $data->val($i, 5);
    $bing = $data->val($i, 6);
    $jrsn = $data->val($i, 4);
    mysqli_query($con,"INSERT INTO `general_highsc` (`id`, `tgl_input`, `nama`, `nim`, `matematika`, `fisika`, `kimia`, `biologi`, `bahasa_indo`, `bahasa_ing`, `jurusan`) VALUES (NULL, '$tgl', '$nama', '$nim', '$mtk', '$fsk', '$kma', '$bgi', '$bi', '$bing', '$jrsn');");
}
?>
<script>
    alert("Data berhasil di upload");
    document.location='../generalsch/Mipadata.php'; 
</script>
<?php

