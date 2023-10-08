<?php
require '../functions/keluarga.php';
$id=$_GET['id'];

if(hapusData($id,'keluarga')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataKeluarga.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataKeluarga.php'
        </script>";
};
