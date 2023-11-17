<?php
    include "koneksi.php";
    $ID_Pemesanan=$_POST['ID_Pemesanan'];
    $Status_Bordiran=$_POST['Status_Bordiran'];
    
    mysqli_query($connect,"INSERT INTO tb_progbordir values('','$ID_Pemesanan','$Status_Bordiran')");
    header("location:data-progresbordir.php");
?>