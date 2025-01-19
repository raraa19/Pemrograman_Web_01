<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, alamat, jenis_kelamin) 
              VALUES ('$nim', '$nama', '$tgl_lahir', '$alamat', '$jenis_kelamin')";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    } 
}
?>

<h2>Tambah Mahasiswa</h2>
<form method="POST">
    <label>NIM:</label>
    <input type="text" name="nim" required><br>
    <label>Nama:</label>
    <input type="text" name="nama_mhs" required><br>
    <label>Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir" required><br>
    <label>Alamat:</label>
    <textarea name="alamat" required></textarea><br>
    <label>Jenis Kelamin:</label><br>
    <input type="text" name="jenis_kelamin" required><br>
    <label>Jenis Kelamin:</label><br>
    <button type="submit" name="submit">Tambah</button>
</form>