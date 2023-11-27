<?php
include "../config/connection.php";
  if(isset($_POST['proses'])){
    $id = $_POST['id'];
    $TTD_kaprodi = $_POST['TTD_kaprodi'];
    $TTD_kaprodi == null ? $TTD_kaprodi = 0 : $TTD_kaprodi = 1;
      $query = "UPDATE mahasiswa SET TTD_kaprodi = '$TTD_kaprodi' WHERE id = $id";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil diubah'); window.location = 'dasbor.php';</script>";
         }
  }
?>