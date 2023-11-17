<?php
    include "koneksi.php";
    $Nama_Pelanggan=$_POST['Nama_Pelanggan'];
    $Alamat=$_POST['Alamat'];
    $No_Hp=$_POST['No_Hp'];
    
    
    mysqli_query($connect,"insert into tb_pelanggan values('','$Nama_Pelanggan','$Alamat','$No_Hp')");

    header("location:data-pelanggan.php");
?>