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
        <a class="activea" href="all_dasbor.php">
            <i class='bx bx-user' ></i>
            <span class="active">Dashboard Pengampu</span>
        </a>
        <span class="activetool">Dashboard Pengampu</span>
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
    <div class="text">Dashboard Pengampu</div>
      <table class="my_table">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Semester</th>
          <th>SKS</th>
          <th>Status</th>
          <th>Hasil</th>
          <th>Id Pembimbing</th>
          <th>Program</th>
          <th>SKS MBKM</th>
        </tr>
    
      <?php
        $query = "SELECT * FROM Data_Mahasiswa";
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
            <td><?= $row['hasil_pendaftaran'] ?></td>
            <td><?= $row['id_pembimbing'] ?></td>
            <td><?= $row['program'] ?></td>
            <td><?= $row['konfersi_SKS_MBKM'] ?></td>
          </tr>
      <?php 
           }
      ?>
      </table>
        <div class="bttn">
          <a href="lolos.php">Lolos</a>
          <a href="../peserta/views/view_total.php">Cek Konversi Mahasiswa</a>
          <a href="../peserta/views/view_dosen.php">Cek Mahasiswa</a>
        </div>
    </section>
</body>
<script src="assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>
</html>