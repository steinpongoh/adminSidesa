<?php
require '../functions/umkm.php';
include '../templates/header.php';

$pageName = 'Tambah Penjual';
if (isset($_POST['submit'])) {
    if (tambahPenjual($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataPenjual.php'
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataPenjual.php'
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
                    <li class="breadcrumb-item"><a href="../controllers/dataPenjual.php">Data Penjual</a></li>
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
                            <label for="nama_penjual">Nama Penjual</label>
                            <select name="nama_penjual" id="selectize" class="form-select" required>
                                <option selected></option>
                                <?php
                                $query = mysqli_query($dbconnect, "SELECT * FROM penduduk") or die(mysqli_error($koneksi));
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id]>$data[nik] - $data[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_telepon">No Telepon</label>
                            <input name="no_telepon" id="no_telepon" autocomplete="off" type="number" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_toko">Alamat Toko</label>
                            <input name="alamat_toko" id="lokasi" autocomplete="off" type="text" class="form-control" placeholder="..." required>
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