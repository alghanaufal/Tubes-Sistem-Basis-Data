<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lolos</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "./assets/style_lolos.css">
</head>
<body>
    <a href="http://localhost/tubessbd2/admin/all_dasbor.php" class="back-btn">Kembali</a>  

    <?php
    $conn = new mysqli("localhost", "root", "", "tubes_sbd");
    $get1=mysqli_query($conn,"SELECT *from mahasiswa where hasil_pendaftaran ='Lolos'");
    $count1=mysqli_num_rows($get1)
     ?>
    <section class="layout">
    
    <div class="card">
    
        <div class="info">
            <i class='bx bx-user' ></i> <?=$count1;?>
        </div>

        <table class="my_table">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>ID pembimbing </th>
                    <th>Program</th>
                    <th>SKS MBKM</th>
                    
                </tr>
                <?php
                $no=1;
                $conn = new mysqli("localhost", "root", "", "tubes_sbd");
                $query= mysqli_query($conn,"SELECT *FROM mahasiswa WHERE hasil_pendaftaran='Lolos'");
                while ($data=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        
                        <td><?= $no++ ?></td>
                        <td><?= $data['NIM'] ?></td>
                        <td><?= $data['nama_mhs'] ?></td>
                        <td><?= $data['semester'] ?></td>
                        <td><?= $data['SKS_smtr'] ?></td>
                        <td><?= $data['id_pembimbing'] ?></td>
                        <td><?= $data['program'] ?></td>
                        <td><?= $data['konfersi_SKS_MBKM'] ?></td>
                        </tr>
                <?php } ?>
        </table>
        </section>
    </div>

    
</body>
<script src="./assets/script.js"></script>
<footer>
    -2022 SBD Kel.2-
</footer>
</html>