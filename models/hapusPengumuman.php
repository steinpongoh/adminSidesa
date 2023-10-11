<?php
require '../functions/berita.php';
$id=$_GET['id'];    

if(hapusData($id,'pengumuman')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataPengumuman.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataPengumuman.php'
        </script>";
};
?>