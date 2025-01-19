<?php
include '../koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'");
    $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "UPDATE mahasiswa SET 
              nama_mhs='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin' 
              WHERE nim='$nim'";
    if (mysqli_query($conn, $query)) {
        header("Location: list.php");
    }
}
?>

<h2>Edit Mahasiswa</h2>
<form method="POST">
    <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama_mhs" value="<?= $data['nama_mhs']; ?>" required><br>
    <label>Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>" required><br>
    <label>Alamat:</label>
    <textarea name="alamat" required><?= $data['alamat']; ?></textarea><br>
    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option value="L" <?= $data['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
        <option value="P" <?= $data['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
    </select><br>
    <button type="submit" name="submit">Simpan</button>
</form>