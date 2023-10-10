<?php
require '../functions/umkm.php';
$id=$_GET['id'];

if(hapusProduk($id)>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataProduk.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataProduk.php'
        </script>";
};
?>