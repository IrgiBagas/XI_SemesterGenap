<?php
    if (isset($_GET['id'])) {
        $id=$_GET['id'];


        $row = $db->getITEM("SELECT * FROM tblpelanggan WHERE idpelanggan=$id");

        if ($row['aktif']==0) {
            $aktif = 1;
        }else {
            
            $aktif = 0;
        }

        
        $sql = "DELETE tblpelanggan SET aktif=$aktif WHERE idpelanggan=$id";

        header("location:?f=pelanggan&m=select");
    }
?>