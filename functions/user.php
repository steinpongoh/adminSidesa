<?php
    include 'general.php';
    
    function ubahUsername($data){
        global $dbconnect;
        $id=$data['id'];
        $username=$data['username'];

        $query="UPDATE user SET username='$username'
        WHERE id='$id'";
        
        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
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