<?php
include '../templates/header.php';
require '../functions/berita.php';

$pageName = 'Ubah Berita';
$getId = $_GET['id'];
$queryBerita = query("SELECT * FROM berita WHERE id='$getId'")[0];

if (isset($_POST['submit'])) {
    if (ubahGaleri($_POST,$_FILES) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataBerita.php';
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
                        <input type="hidden" name="oldFile" id="oldFile" value="<?= $queryBerita['gambar'] ?>">
                        <input type="hidden" name="id" id="id" value="<?= $queryBerita['id'] ?>">
                        <div class="form-group">
                            <label for="judul_berita">Judul Berita</label>
                            <input value="<?= $queryBerita['judul_berita'] ?>" name="judul_berita" id="judul_berita" autocomplete="off" type="text" class="form-control" placeholder="Tuliskan judul berita" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berita">Tanggal Berita</label>
                            <input value="<?= $queryBerita['tanggal_berita'] ?>" name="tanggal_berita" id="tanggal_berita" autocomplete="off" type="date" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="detail_berita">Detail Berita</label>
                            <textarea cols="4" rows="4" form="form" name="detail_berita" id="detail_berita" autocomplete="off" type="text" class="form-control" placeholder="Tambahkan detail..." required><?= $queryBerita['detail_berita'] ?></textarea>
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