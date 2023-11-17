<?php
 include "koneksi.php";
 $ID_Progbordir=$_GET['ID_Progbordir'];
 mysqli_query($connect,"DELETE from tb_progbordir where ID_Progbordir='$ID_Progbordir'");

 header("location:data-progresbordir.php");
?>