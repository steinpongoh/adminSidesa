<?php
require '../functions/user.php';
$id=$_GET['id'];    

if(hapusData($id,'user')>0){
    echo"<script>
        alert('User Gagal Dihapus');
        document.location.href='../controllers/dataUser.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataUser.php'
        </script>";
};
?>