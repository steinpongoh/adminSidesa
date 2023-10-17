<?php
    include 'general.php';
    
    function tambahUser($data){
        global $dbconnect;
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $result = mysqli_query($dbconnect, "SELECT username FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)>0) {
            echo "<script>
                    alert ('Username sudah terdaftar!')
                    document.location.href='../models/tambahUser.php';
                </script>";
        }else{
            $query="INSERT INTO user VALUES ('','$username','$password')";
            mysqli_query($dbconnect,$query);
            return mysqli_affected_rows($dbconnect);
        }
    }

    function ubahPassword($data){
        global $dbconnect;
        $id=$data['id'];
        $password=md5($data['password']);

        $query="UPDATE user SET password='$password'
        WHERE id='$id'";

        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
    }
?>