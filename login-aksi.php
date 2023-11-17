<?php
    //Mengecek data masukkan login
    session_start(); //Session_start untuk Menampung memory data di server
    require "koneksi.php";
    $Username = $_POST['Username'];
    $Password_User = $_POST['Password_User'];
    $qcekdata = mysqli_query($connect,"select * from tb_user where Username ='$Username' and Password_User = '$Password_User' ");
    $ada = mysqli_num_rows($qcekdata);
    if ($ada > 0)
    {
        $tdata = mysqli_fetch_array($qcekdata);
        $_SESSION['Username'] = $tdata['Username'];
        $_SESSION['Password_User'] = $tdata['Password_User'];
        //header("Location:index.php");
        echo "<script>
        alert('Login Berhasil.');
        window.location='index.php';
        </script>";
        
    }else
    {
        echo "<script>
        alert('Maaf, kombinasi username dan password salah.');
        window.location='form-login.php';
        </script>";
    }
?>