<?php
include '../koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM perkuliahan");

?>

<h2>Data Perkuliahan</h2>
<a href="tambah.php">Tambah Perkuliahan</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Kode Mata Kuliah</th>
        <th>NIDN</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['kode_matakuliah']; ?></td>
        <td><?= $row['nidn']; ?></td>
        <td><?= $row['nilai']; ?></td>
        <td>
            <a href="edit.php?nim=<?= $row['nim']; ?>&kode_matakuliah=<?= $row['kode_matakuliah']; ?>">Edit</a> |
            <a href="hapus.php?nim=<?= $row['nim']; ?>&kode_matakuliah=<?= $row['kode_matakuliah']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>