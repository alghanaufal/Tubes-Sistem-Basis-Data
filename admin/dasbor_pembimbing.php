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
            <a href="dasbor.php" >
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard Kaprodi</span>
            </a>
            <span class="tooltip">Dashboard Kaprodi</span>
        </li>
        <li>
        <a href="all_dasbor.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Dashboard Pengampu</span>
        </a>
        <span class="tooltip">Dashboard Pengampu</span>
        </li>
        <li>
        <a class="activea" href="dasbor_pembimbing.php">
            <i class='bx bx-file' ></i>
            <span class="active">Dashboard Pembimbing</span>
        </a>
        <span class="activetool">Dashboard Pembimbing</span>
        </li>
        </ul>
    </div>
    <section class="layout">
        <div class="text">Dashboard Pembimbing</div>
        <table class="my_table">
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Semester</th>
              <th>Pembimbing</th>
            </tr>
            <?php
              $query = "SELECT DISTINCT matkul_ampu.NIM, mahasiswa.nama_mhs, mahasiswa.semester, pembimbing_mbkm.nama_pembimbing FROM matkul_ampu JOIN mahasiswa ON matkul_ampu.NIM = mahasiswa.NIM JOIN pembimbing_mbkm ON pembimbing_mbkm.id_pembimbing = mahasiswa.id_pembimbing";
              $result = mysqli_query($conn, $query);
              $loop = 1;
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                  <td><?= $loop++ ?></td>
                  <td><?= $row['NIM'] ?></td>
                  <td><?= $row['nama_mhs'] ?></td>
                  <td><?= $row['semester'] ?></td>
                  <td><?= $row['nama_pembimbing'] ?></td>
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