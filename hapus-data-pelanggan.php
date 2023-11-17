<?php
 include "koneksi.php";
 $ID_Pelanggan=$_GET['ID_Pelanggan'];
 mysqli_query($connect,"DELETE from tb_pelanggan where ID_Pelanggan='$ID_Pelanggan'");

 header("location:data-pelanggan.php");
?>