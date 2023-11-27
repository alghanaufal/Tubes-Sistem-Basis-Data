<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "./assets/style_search.css">
</head>
<body>
    <section class="layout">
        <div class="text">Dashboard</div>
        <a href="./views/view_total.php" class="back-btn">Kembali</a>
        <table class="my_table">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Semester</th>
                <th>Nama Dosen</th>
            </tr>
     <?php
  
     $no=1;
     $conn = new mysqli("localhost", "root", "", "tubes_sbd");
     $query= mysqli_query($conn," SELECT mahasiswa.NIM, mahasiswa.semester, dosen_pengampu.nama_dosen FROM mahasiswa JOIN dosen_pengampu ON mahasiswa.NIP = dosen_pengampu.NIP WHERE dosen_pengampu.NIP = '$search'");
     
     while ($data=mysqli_fetch_array($query)){
        ?>
        <tr>
            
            <td><?= $no++ ?></td>
            <td><?= $data['NIM'] ?></td>
            <td><?= $data['semester'] ?></td>
            <td><?= $data['nama_dosen'] ?></td>         
        </tr>
    <?php } ?>
</table>
    </section>

    
    
</body>
<script src="./assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>
</html>