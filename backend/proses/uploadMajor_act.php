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
    // $tgl = $data->val($i, 1);
    $nama = $data->val($i, 2);
    $nim = $data->val($i, 3);
    $mtk = $data->val($i, 7);
    $kjr = $data->val($i, 8);
    $bi = $data->val($i, 5);
    $bing = $data->val($i, 6);
    $jrsn = $data->val($i, 4);
    // $query = "INSERT INTO general_sch VALUES (Null,$nama,$matematika,$fisika,$kimia,$biologi,$bahasa_indo,$bahasa_ing,$jurusan)";
    
    mysqli_query($con,"INSERT INTO `major_highsc` (`id`, `tgl_input`, `nama`, `nim`, `bahasa_indo`, `bahasa_ing`, `matematika`, `kejuruan`, `jurusan`) VALUES (NULL, '$tgl', '$nama', '$nim', '$bi', '$bing', '$mtk', '$kjr', '$jrsn');");
    var_dump('tgl',$tgl,'nama',$nama,'nim',$nim,'mtk',$mtk,'kjr',$kjr,'bi',$bi,'bing',$bing,'jrs',$jrsn);
}
?>
<script>
    // alert("Data berhasil di upload");
    document.location='../majorsch/MajorData.php'; 
</script>
<?php

