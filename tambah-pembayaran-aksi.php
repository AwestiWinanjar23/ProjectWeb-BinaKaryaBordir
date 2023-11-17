<?php
    include "koneksi.php";
    $ID_Pemesanan=$_POST['ID_Pemesanan'];
    $Ongkir=$_POST['Ongkir'];
    $Total=$_POST['Total'];
    $Status_Pembayaran=$_POST['Status_Pembayaran'];
    $Bukti_Pembayaran=$_POST['Bukti_Pembayaran'];
    
    mysqli_query($connect,"INSERT INTO tb_pembayaran values('','$ID_Pemesanan','$Ongkir','$Total','$Status_Pembayaran','$Bukti_Pembayaran')");

    header("location:data-pembayaran.php");
?>