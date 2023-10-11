<?php
require '../functions/keluarga.php';
$id = $_GET['id'];



try {
    if (hapusData($id, 'keluarga')) {
        echo "<script>
            document.location.href='../controllers/dataKeluarga.php'
            </script>";
    } else {
        echo "<script>
            document.location.href='../controllers/dataKeluarga.php'
            </script>";
    }
} catch (Throwable $e) {
    echo '<script>alert("Gagal Hapus : Pastikan Data Keluarga sudah tidak memiliki Data Penduduk")
    document.location.href="../controllers/dataKeluarga.php"
    </script>';
};
