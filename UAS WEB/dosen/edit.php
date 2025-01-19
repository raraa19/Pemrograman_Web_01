<?php
include '../koneksi.php';


if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama_dosen = $_POST['nama_dosen'];
    
    $query = "UPDATE dosen SET nidn='$nidn', nama_dosen='$nama_dosen' WHERE nidn='$nidn'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
        exit;
    }
}

if (isset($_GET['nidn'])) {
    $result = mysqli_query($conn, "SELECT * FROM dosen WHERE nidn='$_GET[nidn]'");
    $data = mysqli_fetch_assoc($result);
}
?>

<h2>Edit Dosen</h2>
<form method="POST">
    <label>NIDN :</label>
    <input type="text" name="nidn" value="<?= $data['nidn']; ?>"> <br>
    <label>Nama Dosen:</label>
    <input type="text" name="nama_dosen" value="<?= $data['nama_dosen']; ?>"><br>
    <button type="submit" name="submit" value="edit">Simpan</button>
</form>