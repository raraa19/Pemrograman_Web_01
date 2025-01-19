<?php
include '../koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['nim']; ?></td>
        <td><?= $row['nama_mhs']; ?></td>
        <td><?= $row['tgl_lahir']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jenis_kelamin']; ?></td>
        <td>
            <a href="edit.php?kode=<?= $row['nim']; ?>">Edit</a> |
            <a href="hapus.php?kode=<?= $row['nim']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>