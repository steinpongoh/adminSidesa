<?php
include '../templates/header.php';
require '../functions/keluarga.php';

$pageName = 'Ubah Keluarga';
$getId = $_GET['id'];
$queryKeluarga = query("SELECT * FROM keluarga WHERE id='$getId'")[0];

if(isset($_POST['submit'])){
    if(ubahKeluarga($_POST)>0){
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataKeluarga.php';
            </script> 
        ";
    }else{
        echo "
            <script>
            alert('Data Gagal Diubah');
            </script> 
        ";
    }
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $pageName ?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../controllers/dataKeluarga.php">Data Keluarga</a></li>
                    <li class="breadcrumb-item active"><?= $pageName ?></li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        Form <?= $pageName ?>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?=$queryKeluarga['id']?>">
                        <div class="form-group">
                            <label for="kartu_keluarga">Kartu Keluarga</label>
                            <input value="<?= $queryKeluarga['no_kk'] ?>" name="kartu_keluarga" id="kartu_keluarga" autocomplete="off" type="number" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="kepala_keluarga">Nama Kepala Keluarga</label>
                            <input value="<?= $queryKeluarga['nama_kepala_keluarga'] ?>" name="kepala_keluarga" id="kepala_keluarga" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <button name="submit" id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<?php include '../templates/footer.php'; ?>