<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];

    $query = "INSERT INTO dosen (nidn, nama_dosen) VALUES ('$nidn', '$nama_dosen')";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Tambah Dosen</h2>
<form method="POST">
    <label>NIDN:</label>
    <input type="text" name="nidn" required><br>
    <label>Nama Dosen:</label>
    <input type="text" name="nama_dosen" required><br>
    <button type="submit" name="submit">Tambah</button>
</form>