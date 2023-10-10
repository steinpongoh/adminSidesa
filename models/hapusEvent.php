<?php
require '../functions/event.php';
$id=$_GET['id'];

if(hapusData($id,'event')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataEvent.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataEvent.php'
        </script>";
};
?>