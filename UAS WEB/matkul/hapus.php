<?php
include '../koneksi.php';

if (isset($_GET['kode_matakuliah'])) {
    $kode = $_GET['kode_matakuliah'];
    $query = "DELETE FROM matakuliah WHERE kode_matakuliah='$kode'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>