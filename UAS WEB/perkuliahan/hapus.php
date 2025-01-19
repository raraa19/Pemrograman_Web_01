<?php
include '../koneksi.php';

if (isset($_GET['nim']) && isset($_GET['kode_matakuliah'])) {
    $nim = $_GET['nim'];
    $kode_matakuliah = $_GET['kode_matakuliah'];

    $query = "DELETE FROM perkuliahan WHERE nim='$nim' AND kode_matakuliah='$kode_matakuliah'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>