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
        <a href="./views/view_total.php" class="back-btn">Kembali</a>
        <table class="my_table">
            <tr>
                <th>SKS</th>
            </tr>
            <?php
                while ($data = @$list->fetch_array()) {
            ?>
                <tr>
                    <td><?= $data['total_sks'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <table class="my_table">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Matkul</th>
                <th>SKS</th>
            </tr>
     <?php
  
     $no=1;
     $conn = new mysqli("localhost", "root", "", "tubes_sbd");
     $query= mysqli_query($conn,"SELECT matkul_ampu.NIM, mahasiswa.nama_mhs, matkul.nama_matkul, matkul.SKS_Mata_kuliah_yg_di_konfersi FROM mahasiswa JOIN matkul_ampu ON mahasiswa.NIM = matkul_ampu.NIM JOIN matkul ON matkul_ampu.kode_matkul = matkul.kode_matkul WHERE mahasiswa.NIM = '$search'");
     
     while ($data=mysqli_fetch_array($query)){
        ?>
        <tr>
            
            <td><?= $no++ ?></td>
            <td><?= $data['NIM'] ?></td>
            <td><?= $data['nama_matkul'] ?></td>
            <td><?= $data['SKS_Mata_kuliah_yg_di_konfersi'] ?></td>         
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