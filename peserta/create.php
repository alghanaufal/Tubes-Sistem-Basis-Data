<?php

    include 'config.php';

    // Jika ada request POST yang masuk
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
        $id = @$_POST['id'];
        $NIM = @$_POST['NIM'];
        $nama_mhs = @$_POST['nama_mhs'];
        $semester = @$_POST['semester'];
        $SKS_smtr = @$_POST['SKS_smtr'];
        $TTD_kaprodi = @$_POST['TTD_kaprodi'];
        $hasil_pendaftaran = @$_POST['hasil_pendaftaran'];
        $id_pembimbing = @$_POST['id_pembimbing'];
        $program = @$_POST['program'];
        $konfersi_SKS_MBKM = @$_POST['konfersi_SKS_MBKM'];

        $sql = "INSERT INTO mahasiswa VALUES (0, '$sn', '$name', '$type', '$er', '$fm', '$damage', '$rpm', '$bt', '$msz', '$weight', '$manufacturer', '$country', '$py', '$ps', '$rs')";

        $mysqli->query($sql) or die($mysqli->error);

        header('location: index.php');
    }

    include 'views/view_form.php';

?>