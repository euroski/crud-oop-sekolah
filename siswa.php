<?php
include 'class/Siswa.php';
$siswa = new Siswa();
$dataSiswa = $siswa->tampilDataSiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>
<body>
    <div class="siswa">
        <h1>Data Siswa</h1>
        <a href="tambahSiswa.php">Tambah</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Opsi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($dataSiswa as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_siswa"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><img src="foto/<?= $data["photo"]; ?>" alt="Sepatu Nike Black Edition" width="90"></td>
                <td>
                    <a href="editSiswa.php?id=<?= $data["id_siswa"]; ?>" class="edit">Edit</a>
                    <a href="hapusSiswa.php?id=<?= $data["id_siswa"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>