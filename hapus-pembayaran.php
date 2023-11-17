<?php
 include "koneksi.php";
 $ID_Pembayaran=$_GET['ID_Pembayaran'];
 mysqli_query($connect,"DELETE from tb_pembayaran where ID_Pembayaran='$ID_Pembayaran'");

 header("location:data-pembayaran.php");
?>