<?php
    include "koneksi.php";
    $ID_Pelanggan=$_POST['ID_Pelanggan'];
    $Nama_Pelanggan=$_POST['Nama_Pelanggan'];
    $Alamat_Pelanggan=$_POST['Alamat_Pelanggan'];
    $No_Hp=$_POST['No_Hp'];
    
    
    mysqli_query($connect,"UPDATE tb_pelanggan set Nama_Pelanggan='$Nama_Pelanggan', Alamat_Pelanggan='$Alamat_Pelanggan', No_Hp='$No_Hp' where ID_Pelanggan='$ID_Pelanggan'");

    header("location:data-pelanggan.php");
?>