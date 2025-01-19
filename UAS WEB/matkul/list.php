<?php
include '../koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM matakuliah");
?>

<h2>Data Mata Kuliah</h2>
<a href="tambah.php">Tambah Mata Kuliah</a>
<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>SKS</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['kode_matakuliah']; ?></td>
        <td><?= $row['nama_matakuliah']; ?></td>
        <td><?= $row['sks']; ?></td>
        <td>
            <a href="edit.php?kode_matakuliah=<?= $row['kode_matakuliah']; ?>">Edit</a> |
            <a href="hapus.php?kode_matakuliah=<?= $row['kode_matakuliah']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>