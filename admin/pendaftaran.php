<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/style_form.css">
</head>
<body>
  <div class="card">
      <form action="tambah.php" method="post">
        <div class="form-group">
          <b>NIM</b>     
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="NIM" id="NIM">
        </div>
        <div class="form-group">
          <b>Nama</b>
          &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="nama_mhs" id="nama_mhs">
        </div>
        <div class="form-group">
          <b>Jurusan</b>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" name="jurusan" id="jurusan">
        </div>
        <div class="form-group">
          <b>Semester</b>
          &nbsp;       
          <input type="text" name="semester" id="semester">
        </div>
        <div class="form-group">
          <b>NIP dosen</b>
          &nbsp;       
          <input type="text" name="NIP" id="NIP">
        </div>
        <div class="form-group">
          <b>SKS</b>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
          <input type="text" name="SKS_smtr" id="SKS_smtr">
        </div>
        <button type="submit" class="save-btn" value="Submit" name="proses">Proses</button>
      </form>
  </div>
</body>

<footer>
    -2022 SBD Kel.2-
</footer>

</html>