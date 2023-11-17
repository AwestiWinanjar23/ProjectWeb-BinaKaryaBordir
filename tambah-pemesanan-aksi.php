<?php
    include "koneksi.php";
    $ID_Pelanggan=$_POST['ID_Pelanggan'];
    $Jumlah_Bordiran=$_POST['Jumlah_Bordiran'];
    $Ukuran_Bordir=$_POST['Ukuran_Bordir'];
    $Estimasi_Bordir=$_POST['Estimasi_Bordir'];
    $Desain=$_FILES['Desain'];
    $Pengambilan_Bahan=$_POST['Pengambilan_Bahan'];
    $Pengantaran_Barang=$_POST['Pengantaran_Barang'];
    
    
    mysqli_query($connect,"INSERT INTO tb_pemesanan values('','$ID_Pelanggan','$Jumlah_Bordiran','$Ukuran_Bordir','$Estimasi_Bordir','$Desain','$Pengambilan_Bahan','$Pengantaran_Barang')");

    header("location:data-pemesanan.php");
?>