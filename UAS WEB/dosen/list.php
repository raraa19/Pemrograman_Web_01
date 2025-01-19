<?php
include '../koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM dosen");
?>

<h2>Data Dosen</h2>
<a href="tambah.php">Tambah Dosen</a>
<table border="1">
    <tr>
        <th>NIDN</th>
        <th>Nama Dosen</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['nidn']; ?></td>
        <td><?= $row['nama_dosen']; ?></td>
        <td>
            <a href="edit.php?nidn=<?= $row['nidn']; ?>">Edit</a> |
            <a href="hapus.php?nidn=<?= $row['nidn']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>