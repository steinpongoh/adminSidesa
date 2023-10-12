<?php
require '../functions/pengumuman.php';
include '../templates/header.php';

$pageName='Tambah Pengumuman';
if (isset($_POST['submit'])) {
    if (tambahPengumuman($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataPengumuman.php'
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataPengumuman.php'
        </script>";
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
                    <li class="breadcrumb-item"><a href="../controllers/dataPengumuman.php">Data Galeri</a></li>
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
                        <div class="form-group">
                            <label for="judul_pengumuman">Judul Pengumuman</label>
                            <input name="judul_pengumuman" id="judul_pengumuman" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="detail_pengumuman">Detail Pengumuman</label>
                            <textarea cols="4" rows="4" form="form" name="detail_pengumuman" id="detail_pengumuman" autocomplete="off" type="text" class="form-control" placeholder required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                            <input name="tanggal_pengumuman" id="tanggal_pengumuman" autocomplete="off" type="datetime-local" class="form-control" placeholder="..." required>
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