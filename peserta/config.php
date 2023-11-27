<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'tubes_sbd';

    $mysqli = mysqli_connect($host,$user,$pass,$db) or die ('Tidak Dapat Terhubung ke Database');
?>