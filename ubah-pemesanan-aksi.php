<?php
    include "koneksi.php";    
    $ID_Pelanggan=$_POST['ID_Pelanggan'];
    $ID_Pemesanan=$_POST['ID_Pemesanan'];
    $Jumlah_Bordiran=$_POST['Jumlah_Bordiran'];
    $Ukuran_Bordir=$_POST['Ukuran_Bordir'];
    $Estimasi_Bordir=$_POST['Estimasi_Bordir'];
    $Desain=$_POST['Desain'];
    $Pengambilan_Bahan=$_POST['Pengambilan_Bahan'];
    $Pengantaran_Barang=$_POST['Pengantaran_Barang'];
    
    
    mysqli_query($connect,"UPDATE tb_pemesanan set ID_Pelanggan='$ID_Pelanggan', Jumlah_Bordiran='$Jumlah_Bordiran', Ukuran_Bordir='$Ukuran_Bordir', Estimasi_Bordir='$Estimasi_Bordir', Desain='$Desain', Pengambilan_Bahan='$Pengambilan_Bahan', Pengantaran_Barang='$Pengantaran_Barang' where ID_Pemesanan='$ID_Pemesanan'");

    header("location:data-pemesanan.php");
?>