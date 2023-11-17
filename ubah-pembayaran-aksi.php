<?php
    include "koneksi.php";
    $ID_Pemesanan=$_POST['ID_Pemesanan'];
    $ID_Pembayaran=$_POST['ID_Pembayaran'];
    $Ongkir=$_POST['Ongkir'];
    $Total=$_POST['Total'];
    $Status_Pembayaran=$_POST['Status_Pembayaran'];
    $Bukti_Pembayaran=$_POST['Bukti_Pembayaran'];
    
    mysqli_query($connect,"UPDATE tb_pembayaran set ID_Pemesanan='$ID_Pemesanan', Ongkir='$Ongkir', Total='$Total', Status_Pembayaran='$Status_Pembayaran', Bukti_Pembayaran='$Bukti_Pembayaran' where ID_Pembayaran='$ID_Pembayaran'");

    header("location:data-pembayaran.php");
?>