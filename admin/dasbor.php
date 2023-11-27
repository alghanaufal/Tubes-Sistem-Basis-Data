<?php include "../config/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dasbor</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="assets/style_dashboard.css">
</head>
<body>
<div class="sidebar">   
        <div class="logo-details">
        <img src="../images/upilogo.png" class="logo_ico" alt="">
            <div class="logo_name">SIAK</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
        <li>
            <a class="activea" href="dasbor.php" >
            <i class='bx bx-grid-alt'></i>
            <span class="active">Dashboard Kaprodi</span>
            </a>
            <span class="activetool">Dashboard Kaprodi</span>
        </li>
        <li>
        <a href="all_dasbor.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Dashboard Pengampu</span>
        </a>
        <span class="tooltip">Dashboard Pengampu</span>
        </li>
        <li>
        <a href="dasbor_pembimbing.php">
            <i class='bx bx-file' ></i>
            <span class="links_name">Dashboard Pembimbing</span>
        </a>
        <span class="tooltip">Dashboard Pembimbing</span>
        </li>
        </ul>
    </div>
    <section class="layout">
        <div class="text">Dashboard Kaprodi</div>
        <table class="my_table">
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Semester</th>
              <th>SKS</th>
              <th>Status</th>
              <th>Hapus</th>
              <th>Ubah</th>
            </tr>
            <?php
              $query = "SELECT * FROM mahasiswa";
              $result = mysqli_query($conn, $query);
              $loop = 1;
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                  <td><?= $loop++ ?></td>
                  <td><?= $row['NIM'] ?></td>
                  <td><?= $row['nama_mhs'] ?></td>
                  <td><?= $row['jurusan'] ?></td>
                  <td><?= $row['semester'] ?></td>
                  <td><?= $row['SKS_smtr'] ?></td>
                  <td><?= ($row['TTD_kaprodi'] ==0)? "Belum selesai" : "Selesai" ?></td>
                  <td><a href="delete.php?id=<?= $row['id'] ?>">Hapus ID <?= $row['id'] ?></a></td>
                  <td><a href="ubah.php?id=<?= $row['id'] ?>">Ubah ID <?= $row['id'] ?></a></td>
                </tr>
            <?php 
                }
          ?>
        </table>
    </section>
    
</body>
<script src="assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>

</body>
</html>