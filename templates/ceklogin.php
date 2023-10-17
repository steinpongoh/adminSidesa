<?php
session_start();
$usernamed = $_POST['username'];
$password = md5($_POST['password']);

include '../functions/dbconnect.php';
$cekuser = mysqli_query($dbconnect,"select * from user where username='$usernamed' and password='$password'");
$hitung = mysqli_num_rows($cekuser);
if($hitung>0){
    $data = mysqli_fetch_array($cekuser);
        $_SESSION['username'] = $data['username'];
        echo "<script>
                alert ('Selamat datang $usernamed anda masuk sebagai Admin!');
                document.location.href='../index.php';
            </script>";
}else{
    header("location:../templates/login.php");
}

?>
