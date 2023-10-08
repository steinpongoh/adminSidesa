<?php
require '../functions/penduduk.php';
$id=$_GET['id'];

if(hapusData($id,'penduduk')>0){
    echo"<script>
        alert('Data Gagal Dihapus');
        document.location.href='../controllers/dataPenduduk.php'
        </script>";
}else{
    echo"<script>
        document.location.href='../controllers/dataPenduduk.php'
        </script>";
};
