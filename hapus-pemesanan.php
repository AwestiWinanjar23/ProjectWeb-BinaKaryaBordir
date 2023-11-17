<?php
 include "koneksi.php";
 $ID_Pemesanan=$_GET['ID_Pemesanan'];
 mysqli_query($connect,"DELETE from tb_pemesanan where ID_Pemesanan='$ID_Pemesanan'");

 header("location:data-pemesanan.php");
?>