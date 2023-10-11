<?php
require '../functions/berita.php';
$id=$_GET['id'];    

if(hapusData($id,'berita')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataBerita.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataBerita.php'
        </script>";
};
?>