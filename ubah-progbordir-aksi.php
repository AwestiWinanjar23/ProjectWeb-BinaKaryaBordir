<?php
    include "koneksi.php";
    $ID_Pemesanan=$_POST['ID_Pemesanan'];
    $ID_Progbordir=$_POST['ID_Progbordir'];
    $Status_Bordiran=$_POST['Status_Bordiran'];
    
    mysqli_query($connect,"UPDATE tb_progbordir SET ID_Pemesanan='$ID_Pemesanan', Status_Bordiran='$Status_Bordiran' WHERE ID_Progbordir='$ID_Progbordir'");
    header("location:data-progresbordir.php");
?>