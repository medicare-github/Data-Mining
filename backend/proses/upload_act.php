<?php
include '../connection/connection.php';
include 'excel_reader.php';
$data=new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
$hasildata=$data->rowcount($sheet_index=0);
$sukses=0;
$gagal=0;
for ($i=2; $i <=$hasildata; $i++) { 
    $nama=$data->val($i,2);
    $matematika=$data->val($i,2);
    $fisika=$data->val($i,2);
    $kimia=$data->val($i,2);
    $biologi=$data->val($i,2);
    $bahasa_indo=$data->val($i,2);
    $bahasa_ing=$data->val($i,2);
    $jurusan=$data->val($i,2);


    $query="INSERT INTO general_sch"
}