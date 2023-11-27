<?php

    include 'config.php';

    $sql = 'SELECT * FROM mahasiswa';

     // Searching

    // Untuk Mengambil data yang di search
    $search = @$_GET['searchData'];

    if (!empty($search)) {
       
        $sql .= " WHERE
        NIM LIKE '%$search%'";
    }

    $list = $mysqli->query($sql);

    include 'views/view_index.php';