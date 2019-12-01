<?php
include '../connection/connection.php';
$id = $_GET['kode'];
$query = "DELETE FROM general_highsc WHERE id='$id'";
if (mysqli_query($con, $query)) {
    ?>
    <script language='JavaScript'>
        alert('Data Berhasil Dihapus')
        document.location = '../generalsch/Mipadata.php'
    </script>
<?php
} else {
    ?>
    <script language='JavaScript'>
        alert('Data Gagal di hapus')
        document.location = '../generalsch/Mipadata.php'
    </script>
<?php
}
