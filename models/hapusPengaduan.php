<?php
require '../functions/pengaduan.php';
$id=$_GET['id'];

if(hapusData($id,'pengaduan')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataPengaduan.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataPengaduan.php'
        </script>";
};
?>