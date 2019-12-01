<?php
include '../connection/connection.php';
$id = $_GET['kode'];
$query = "DELETE FROM generalsos_highsc WHERE id='$id'";
if (mysqli_query($con, $query)) {
    ?>
    <script language='JavaScript'>
        alert('Data Berhasil Dihapus')
        document.location = '../generalsch/SosData.php'
    </script>
<?php
} else {
    ?>
    <script language='JavaScript'>
        alert('Data Gagal di hapus')
        document.location = '../generalsch/SosData.php'
    </script>
<?php
}
