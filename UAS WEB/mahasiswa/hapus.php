<?php
include "../koneksi.php";
mysqli_query($conn,"DELETE FROM mahasiswa where nim='$_GET[kode]'");
header("Location:list.php");
?>