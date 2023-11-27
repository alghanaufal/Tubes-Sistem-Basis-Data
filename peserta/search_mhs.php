<?php

    include 'config.php';

    $sql = ' SELECT mahasiswa.NIM, mahasiswa.nama_mhs, mahasiswa.semester, dosen_pengampu.nama_dosen FROM mahasiswa JOIN dosen_pengampu ON mahasiswa.NIP = dosen_pengampu.NIP';

     // Searching

    // Untuk Mengambil data yang di search
    $search = @$_GET['searchData'];

    if (!empty($search)) {
       
        $sql .= " WHERE
        dosen_pengampu.NIP LIKE '$search'";
    }

    $list = $mysqli->query($sql);

    include 'views/view_mhs.php';