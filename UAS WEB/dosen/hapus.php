<?php
include '../koneksi.php';

if (isset($_GET['nidn'])) {
    $nidn = $_GET['nidn'];
    $query = "DELETE FROM dosen WHERE nidn='$nidn'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>