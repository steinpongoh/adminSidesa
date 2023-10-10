<?php
require '../functions/umkm.php';
$id=$_GET['id'];

if(hapusPenjual($id,'penjual')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataPenjual.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataPenjual.php'
        </script>";
};
?>