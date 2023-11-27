<?php

    include 'config.php';

    $sql = 'SELECT SUM(SKS_Mata_kuliah_yg_di_konfersi) AS total_sks FROM matkul_ampu';

     // Searching

    // Untuk Mengambil data yang di search
    $search = @$_GET['searchData'];

    if (!empty($search)) {
       
        $sql .= " WHERE
        NIM LIKE '$search'";
    }

    $list = $mysqli->query($sql);

    include 'views/view_skstal.php';