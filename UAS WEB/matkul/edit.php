<?php
include '../koneksi.php';

if (isset($_GET['kode_matakuliah'])) {
    $kode = $_GET['kode_matakuliah'];
    $result = mysqli_query($conn, "SELECT * FROM matakuliah WHERE kode_matakuliah='$kode'");
    $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $kode = $_POST['kode_matakuliah'];
    $nama = $_POST['nama_matakuliah'];
    $sks = $_POST['sks'];

    $query = "UPDATE matakuliah SET nama_matakuliah='$nama', sks='$sks' WHERE kode_matakuliah='$kode'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Edit Mata Kuliah</h2>
<form method="POST">
    <input type="hidden" name="kode_matakuliah" value="<?= $data['kode_matakuliah']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama_matakuliah" value="<?= $data['nama_matakuliah']; ?>" required><br>
    <label>SKS:</label>
    <input type="number" name="sks" value="<?= $data['sks']; ?>" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>