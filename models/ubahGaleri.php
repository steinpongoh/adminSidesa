<?php
include '../templates/header.php';
require '../functions/galeri.php';

$pageName = 'Ubah Galeri';
$getId = $_GET['id'];
$queryGaleri = query("SELECT * FROM galeri WHERE id='$getId'")[0];

if (isset($_POST['submit'])) {
    if (ubahGaleri($_POST,$_FILES) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataGaleri.php';
            </script> 
        ";
    } else {
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
                    <li class="breadcrumb-item"><a href="../controllers/dataGaleri.php">Data Galeri</a></li>
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
                <form name="form" id="form" action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="oldFile" id="oldFile" value="<?= $queryGaleri['gambar'] ?>">
                        <input type="hidden" name="id" id="id" value="<?= $queryGaleri['id'] ?>">
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input value="<?= $queryGaleri['caption'] ?>" name="caption" id="caption" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_upload">Tanggal dan Waktu</label>
                            <input value="<?= $queryGaleri['tanggal_upload'] ?>" name="tanggal_upload" id="tanggal_upload" autocomplete="off" type="datetime-local" class="form-control" placeholder="..." required>
                        </div>
                        <div class="mb-3">
                            <label for="namaFile" class="form-label">Foto</label>
                            <input id="namaFile" name="namaFile" class="form-control" type="file">
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