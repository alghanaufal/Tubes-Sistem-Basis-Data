<?php
include "../config/connection.php";
  if(isset($_POST['proses'])){
    $NIM = $_POST['NIM'];
    $nama_mhs = $_POST['nama_mhs'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];
    $NIP = $_POST['NIP'];
    $SKS_smtr = $_POST['SKS_smtr'];
      $query = "INSERT INTO `mahasiswa` (`id`,`NIM`, `nama_mhs`, `jurusan`, `semester`,`NIP`, `SKS_smtr`, `TTD_kaprodi`) 
                VALUES (NULL, '$NIM', '$nama_mhs', '$jurusan', '$semester', '$NIP', $SKS_smtr, '0')";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil ditambah'); window.location = 'pesan.php';</script>";
         }
  }
?>