<?php
require '../functions/umkm.php';
$id=$_GET['id'];


try{
    if(hapusPenjual($id,'penjual')){
        echo"<script>
            document.location.href='../controllers/dataPenjual.php'
            </script>";
    }
} catch(Throwable $e){
    echo '<script>alert("Gagal Hapus : Pastikan Data Penjual Sudah Tidak Memiliki Data Produk")
    document.location.href="../controllers/dataPenjual.php"</script>';
}
?>