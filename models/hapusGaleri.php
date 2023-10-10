<?php
require '../functions/galeri.php';
$id=$_GET['id'];    

if(hapusData($id,'galeri')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataGaleri.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataGaleri.php'
        </script>";
};
?>