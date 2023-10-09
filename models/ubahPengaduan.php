<?php
include '../templates/header.php';
require '../functions/pengaduan.php';
$pageName = 'Ubah Pengaduan';

$getId = $_GET['id'];
$queryPengaduan = query("SELECT * FROM pengaduan WHERE id='$getId'")[0];
if (isset($_POST['submit'])) {
    if (ubahPengaduan($_POST, $_FILES) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah')
            document.location.href='../controllers/dataPengaduan.php'
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil Gagal')
            document.location.href='../controllers/dataPengaduan.php'
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
                    <li class="breadcrumb-item"><a href="../controllers/dataPengaduan.php">Data Pengaduan</a></li>
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
                        <input type="hidden" name="oldFile" id="oldFile" value="<?= $queryPengaduan['gambar'] ?>">
                        <input type="hidden" name="id" id="id" value="<?= $queryPengaduan['id'] ?>">
                        <div class="form-group">
                            <label for="nama_pengadu">Nama Pengadu</label>
                            <input value="<?= $queryPengaduan['nama_pengadu'] ?>" name="nama_pengadu" id="nama_pengadu" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat</label>
                            <input value="<?= $queryPengaduan['alamat_lengkap'] ?>" name="alamat_lengkap" id="alamat_lengkap" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="no_telepon">Nomor Telepon</label>
                            <input value="<?= $queryPengaduan['no_telepon'] ?>" name="no_telepon" id="no_telepon" autocomplete="off" type="number" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="judul_pengaduan">Judul</label>
                            <input value="<?= $queryPengaduan['judul_pengaduan'] ?>" name="judul_pengaduan" id="judul_pengaduan" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengaduan">Tanggal dan Waktu</label>
                            <input value="<?= $queryPengaduan['tanggal_pengaduan'] ?>" name="tanggal_pengaduan" id="tanggal_pengaduan" autocomplete="off" type="datetime-local" class="form-control" placeholder="..." required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Foto</label>
                            <input id="gambar" name="gambar" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label for="detail_pengaduan">Detail Pengaduan</label>
                            <textarea cols="4" rows="4" form="form" name="detail_pengaduan" id="detail_pengaduan" autocomplete="off" type="text" class="form-control" placeholder required><?= $queryPengaduan['detail_pengaduan'] ?></textarea>
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