<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $kode = $_POST['kode_matakuliah'];
    $nama = $_POST['nama_matakuliah'];
    $sks = $_POST['sks'];

    $query = "INSERT INTO matakuliah (kode_matakuliah, nama_matakuliah, sks) 
              VALUES ('$kode', '$nama', '$sks')";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Tambah Mata Kuliah</h2>
<form method="POST">
    <label>Kode:</label>
    <input type="text" name="kode_matakuliah" required><br>
    <label>Nama:</label>
    <input type="text" name="nama_matakuliah" required><br>
    <label>SKS:</label>
    <input type="number" name="sks" required><br>
    <button type="submit" name="submit">Tambah</button>
</form>