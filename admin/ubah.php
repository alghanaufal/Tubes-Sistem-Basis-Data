<?php
include "../config/connection.php";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa where id = $id";
      $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ubah data</title>
  <link rel="stylesheet" href="assets/style_form.css">
</head>
<body>
<fieldset>
        <form action="update.php" method="post">
        <table>
          <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $row['NIM']; ?></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $row['nama_mhs']; ?></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?= $row['jurusan']; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>:</td>
            <td><?= $row['semester']; ?></td>
          </tr>
          <tr>
            <td>SKS</td>
            <td>:</td>
            <td><?= $row['SKS_smtr']; ?></td>
          </tr>
          <tr>
            <td>Complete?</td>
            <td></td>
            <td><input type="checkbox" name="TTD_kaprodi" id="TTD_kaprodi"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="proses" name="proses"></td>
          </tr>
          <input type="text" name="id" id="id" value="<?= $row['id']; ?>">
        </table>
        </form>
    </fieldset>
</body>
</html>