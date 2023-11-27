<?php include "../config/connection.php"; ?>

<?php

    // Jika ada request POST yang masuk
    if(isset($_POST['proses'])){
        // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
        $NIM = $_POST['NIM'];
        $kode_matkul = $_POST['kode_matkul'];
        $SKS_Mata_kuliah_yg_di_konfersi = $_POST['SKS_Mata_kuliah_yg_di_konfersi'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM','$kode_matkul','$SKS_Mata_kuliah_yg_di_konfersi')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }

        $NIM1 = $_POST['NIM1'];
        $kode_matkul1 = $_POST['kode_matkul1'];
        $SKS_Mata_kuliah_yg_di_konfersi1 = $_POST['SKS_Mata_kuliah_yg_di_konfersi1'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM1','$kode_matkul1','$SKS_Mata_kuliah_yg_di_konfersi1')";

        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }

        $NIM2 = $_POST['NIM2'];
        $kode_matkul2 = $_POST['kode_matkul2'];
        $SKS_Mata_kuliah_yg_di_konfersi2 = $_POST['SKS_Mata_kuliah_yg_di_konfersi2'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM2','$kode_matkul2','$SKS_Mata_kuliah_yg_di_konfersi2')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }

        $NIM3 = $_POST['NIM3'];
        $kode_matkul3 = $_POST['kode_matkul3'];
        $SKS_Mata_kuliah_yg_di_konfersi3 = $_POST['SKS_Mata_kuliah_yg_di_konfersi3'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM3','$kode_matkul3','$SKS_Mata_kuliah_yg_di_konfersi3')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }

        $NIM4 = $_POST['NIM4'];
        $kode_matkul4 = $_POST['kode_matkul4'];
        $SKS_Mata_kuliah_yg_di_konfersi4 = $_POST['SKS_Mata_kuliah_yg_di_konfersi4'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM4','$kode_matkul4','$SKS_Mata_kuliah_yg_di_konfersi4')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }
        
        $NIM5 = $_POST['NIM5'];
        $kode_matkul5 = $_POST['kode_matkul5'];
        $SKS_Mata_kuliah_yg_di_konfersi5 = $_POST['SKS_Mata_kuliah_yg_di_konfersi5'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM5','$kode_matkul5','$SKS_Mata_kuliah_yg_di_konfersi5')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }
        
        $NIM6 = $_POST['NIM6'];
        $kode_matkul6 = $_POST['kode_matkul6'];
        $SKS_Mata_kuliah_yg_di_konfersi6 = $_POST['SKS_Mata_kuliah_yg_di_konfersi6'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM6','$kode_matkul6','$SKS_Mata_kuliah_yg_di_konfersi6')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }
        
        $NIM7 = $_POST['NIM7'];
        $kode_matkul7 = $_POST['kode_matkul7'];
        $SKS_Mata_kuliah_yg_di_konfersi7 = $_POST['SKS_Mata_kuliah_yg_di_konfersi7'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM7','$kode_matkul7','$SKS_Mata_kuliah_yg_di_konfersi7')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }
        
        $NIM8 = $_POST['NIM8'];
        $kode_matkul8 = $_POST['kode_matkul8'];
        $SKS_Mata_kuliah_yg_di_konfersi8 = $_POST['SKS_Mata_kuliah_yg_di_konfersi8'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM8','$kode_matkul8','$SKS_Mata_kuliah_yg_di_konfersi8')";
        
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
        }

        $NIM9 = $_POST['NIM9'];
        $kode_matkul9 = $_POST['kode_matkul9'];
        $SKS_Mata_kuliah_yg_di_konfersi9 = $_POST['SKS_Mata_kuliah_yg_di_konfersi9'];

        $query  = "INSERT INTO `matkul_ampu` (`NIM`,`kode_matkul`, `SKS_Mata_kuliah_yg_di_konfersi`) VALUES ('$NIM9','$kode_matkul9','$SKS_Mata_kuliah_yg_di_konfersi9')";
        
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil ditambah'); window.location = 'totalsks.php';</script>";
         }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="./assets/style_form.css">
</head>
<body>
    <fieldset>
      <legend>List pekerjaan</legend>
      <table border="1" style="border-collapse:collapse" cellspacing="100" cellpadding="10" >
        <tr>
            <th>NO</th>
          <th>Kode Matkul</th>
          <th>Nama Matkul</th>
          <th>SKS</th>
        </tr>
    
      <?php
        $query = "SELECT * FROM matkul";
         $result = mysqli_query($conn, $query);
         $loop = 1;
          while($row = mysqli_fetch_assoc($result)){?>
          <tr>
            <td><?= $loop++ ?></td>
            <td><?= $row['kode_matkul'] ?></td>
            <td><?= $row['nama_matkul'] ?></td>
            <td><?= $row['SKS_Mata_kuliah_yg_di_konfersi'] ?></td>
          </tr>
      <?php 
           }
      ?>
      </table>
    </fieldset>


    <div class="card">
        <br>
        <a href="./index.php" class="back-btn">Kembali</a>
        <br>
        <form action="view_program.php" method="POST">
        <!-- 1 -->
        <div class="grid-container">
          <table>
                <tr>
                  <td>NIM</td>
                  <td>:</td>
                  <td><input type="text" name="NIM" id="NIM"></td>
                </tr>
                <tr>
                  <td>Kode Matkul</td>
                  <td>:</td>
                  <td><input type="text" name="kode_matkul" id="kode_matkul"></td>
                </tr>
                <tr>
              <tr>
              <td>SKS</td>
                  <td>:</td>
                  <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
                </tr>
                </table>
        </div>
        <!-- 2 -->
        <div class="grid-container">  
            <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM1" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul1" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi1" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
        </div>
           
              <!-- 3 -->
              <div class="grid-container">
                 <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM2" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul2" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi2" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
             
              <!-- 4 -->
              <div class="grid-container">
                 <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM3" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul3" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi3" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </div>
             
              <!-- 5 -->
              <div class="grid-container">
                 <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM4" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul4" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi4" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
             
              <!-- 6 -->
              <div class="grid-container">
                <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM5" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul5" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi5" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
              
              <!-- 7 -->
              <div class="grid-container">
                <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM6" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul6" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi6" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
              
              <!-- 8 -->
              <div class="grid-container">
                <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM7" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul7" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi7" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
              
              <!-- 9 -->
              <div class="grid-container">
                <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM8" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul8" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi8" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              </table>
              </div>
              
              <!-- 10 -->
              <div class="grid-container">
                <table>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM9" id="NIM"></td>
              </tr>
              <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode_matkul9" id="kode_matkul"></td>
              </tr>
              <tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="SKS_Mata_kuliah_yg_di_konfersi9" id="SKS_Mata_kuliah_yg_di_konfersi"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit" name="proses"></td>
              </tr>
            </table>
              </div>
              
            
        </form>
    </div> 
</body>

<footer>
    -2022 SBD Kel.2-
</footer>
</html>