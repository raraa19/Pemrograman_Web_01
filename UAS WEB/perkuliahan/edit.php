<?php
include '../koneksi.php';

if (isset($_GET['nim']) && isset($_GET['kode_matakuliah'])) {
    $nim = $_GET['nim'];
    $kode_matakuliah = $_GET['kode_matakuliah'];

    $result = mysqli_query($conn, "SELECT * FROM perkuliahan WHERE nim='$nim' AND kode_matakuliah='$kode_matakuliah'");
    $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $nidn = $_POST['nidn'];
    $nilai = $_POST['nilai'];

    $query = "UPDATE perkuliahan 
              SET nidn='$nidn', nilai='$nilai' 
              WHERE nim='$nim' AND kode_matakuliah='$kode_matakuliah'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Edit Data Perkuliahan</h2>
<form method="POST">
    <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
    <input type="hidden" name="kode_matakuliah" value="<?= $data['kode_matakuliah']; ?>">
    <label>NIDN:</label>
    <input type="text" name="nidn" value="<?= $data['nidn']; ?>" required><br>
    <label>Nilai:</label>
    <input type="text" name="nilai" value="<?= $data['nilai']; ?>" required><br>
    <button type="submit" name="submit">Simpan</button>
</form>