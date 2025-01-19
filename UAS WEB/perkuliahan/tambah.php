<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $nidn = $_POST['nidn'];
    $nilai = $_POST['nilai'];

    $query = "INSERT INTO perkuliahan (nim, kode_matakuliah, nidn, nilai) 
              VALUES ('$nim', '$kode_matakuliah', '$nidn', '$nilai')";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Tambah Data Perkuliahan</h2>
<form method="POST">
    <label>NIM:</label>
    <input type="text" name="nim" required><br>
    <label>Kode Mata Kuliah:</label>
    <input type="text" name="kode_matakuliah" required><br>
    <label>NIDN:</label>
    <input type="text" name="nidn" required><br>
    <label>Nilai:</label>
    <input type="text" name="nilai" required><br>
    <button type="submit" name="submit">Tambah</button>
</form>