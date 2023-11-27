<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "./assets/style.css">
</head>
<body>
    <section class="layout">
        <div class="text">Dashboard</div>
        <a href="http://localhost/tubessbd2/admin/index.php" class="back-btn">Kembali</a>
        <table class="my_table">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Konfirmasi</th>
                <th>Hasil</th>
                <th>Id Pembimbing</th>
                <th>Program</th>
                <th>SKS MBKM</th>
                <th>Aksi</th>
            </tr>
            <?php
                $i = 1;
                while ($data = @$list->fetch_array()) {
            ?>
                <tr>
                    
                    <td><?= $i++ ?></td>
                    <td><?= $data['NIM'] ?></td>
                    <td><?= $data['nama_mhs'] ?></td>
                    <td><?= $data['semester'] ?></td>
                    <td><?= $data['SKS_smtr'] ?></td>
                    <td><?= ($data['TTD_kaprodi'] == 0)? "Belum Selesai" : "Selesai" ?></td>
                    <td><?= $data['hasil_pendaftaran'] ?></td>
                    <td><?= $data['id_pembimbing'] ?></td>
                    <td><?= $data['program'] ?></td>
                    <td><?= $data['konfersi_SKS_MBKM'] ?></td>
                    <td>
                        <div class="flex">
                            <div class="edit">
                                <a href="update.php?id=<?= $data['id'] ?>">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
    
</body>
<script src="../assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>
</html>