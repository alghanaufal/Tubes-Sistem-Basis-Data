<?php 

    include 'config.php';

   
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $hasil_pendaftaran  = @$_POST['hasil_pendaftaran'];
        $id_pembimbing      = @$_POST['id_pembimbing'];
        $program            = @$_POST['program'];
        $konfersi_SKS_MBKM  = @$_POST['konfersi_SKS_MBKM'];

    
        $sql = "UPDATE mahasiswa SET
        hasil_pendaftaran = '$hasil_pendaftaran',
        id_pembimbing = '$id_pembimbing',
        program = '$program', 
        konfersi_SKS_MBKM = '$konfersi_SKS_MBKM'
        WHERE id = $id";

        $mysqli->query($sql) or die($mysqli->error);
        
        header('location: index.php');
    }

    
    if(empty($id)) header('location: index.php');
   
    $sql    = "SELECT * FROM mahasiswa WHERE id = '$id' ";
    $query  = $mysqli->query($sql);

   
    $user = $query->fetch_array();

    
    if(empty($user))header('location: index.php');


    include 'views/view_form.php';

?>