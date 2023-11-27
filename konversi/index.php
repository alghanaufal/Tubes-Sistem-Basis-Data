<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db   = 'tubes_sbd';

            $conn = mysqli_connect($host,$user,$pass,$db) or die ('Tidak Dapat Terhubung ke Database');
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $NIM                              = $_POST['NIM'];
            $kode_matkul                      = $_POST['kode_matkul'];
            $SKS_Mata_kuliah_yg_di_konfersi   = $_POST['SKS_Mata_kuliah_yg_di_konfersi'];
            
            $sql = "UPDATE matkul_ampu". "SET kode_matkul = $kode_matkul, SKS_Mata_kuliah_yg_di_konfersi = $SKS_Mata_kuliah_yg_di_konfersi". 
               "WHERE NIM = $NIM" ;
            
            $retval = mysqli_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">NIM</td>
                        <td><input name = "NIM" type = "text" 
                           id = "NIM"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Program</td>
                        <td><input name = "kode_matkul" type = "text" 
                           id = "kode_matkul"></td>
                     </tr>

                     <tr>
                        <td width = "100">SKS</td>
                        <td><input name = "SKS_Mata_kuliah_yg_di_konfersi" type = "text" 
                           id = "SKS_Mata_kuliah_yg_di_konfersi"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>