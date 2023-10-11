<?php
require '../functions/berita.php';
include '../templates/header.php';

$pageName = 'Tambah Berita';
if (isset($_POST['submit'])) {
    if (tambahBerita($_POST, $_FILES) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambah')
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambah')
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
                    <li class="breadcrumb-item"><a href="../controllers/dataBerita.php">Data Berita</a></li>
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
                            <label for="judul_berita">Judul Berita</label>
                            <input name="judul_berita" id="judul_berita" autocomplete="off" type="text" class="form-control" placeholder="Tuliskan judul berita" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berita">Tanggal Berita</label>
                            <input name="tanggal_berita" id="tanggal_berita" autocomplete="off" type="datetime-local" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="detail_berita">Detail Berita</label>
                            <textarea cols="4" rows="4" form="form" name="detail_berita" id="detail_berita" autocomplete="off" type="text" class="form-control" placeholder="Tambahkan detail..." required></textarea>
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


<?php include '../templates/footer.php' ?>