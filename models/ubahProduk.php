<?php
require '../functions/umkm.php';
include '../templates/header.php';
$pageName = 'Ubah Produk';

$getId=$_GET['id'];
$queryProduk = query("SELECT DISTINCT
penduduk.nama,
penduduk.nik,
penjual.id_penjual,
penjual.nama_penjual,
penjual.no_telepon,
penjual.alamat_toko,
produk.id_produk,
produk.id_penjual,
produk.nama_produk,
produk.harga,
produk.gambar,
produk.deskripsi 

FROM produk 
JOIN penjual ON produk.id_penjual=penjual.id_penjual
JOIN penduduk ON penjual.nama_penjual=penduduk.id WHERE produk.id_produk='$getId'")[0];


if (isset($_POST['submit'])) {
    
    if (ubahProduk($_POST,$_FILES)) {
        echo "<script>
            alert('Data Gagal Diubah')
            document.location.href='../controllers/dataProduk.php'
        </script>";
    } else {
        echo "<script>
            alert('Data Berhail Diubah')
            document.location.href='../controllers/dataProduk.php'
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
                        <input value="<?=$queryProduk['id_produk']?>" type="hidden" name="id" id="id" class="id">
                        <input value="<?=$queryProduk['gambar']?>" type="hidden" name="oldFile" id="oldFile" class="oldFile">
                        <div class="form-group">
                            <label for="nama_penjual">Nama Penjual</label>
                            <select name="nama_penjual" id="selectize" class="form-select" required>
                                <option selected value="<?=$queryProduk['id_penjual']?>"><?=$queryProduk['nik']?> - <?=$queryProduk['nama']?></option>
                                <?php
                                $query = mysqli_query($dbconnect, "SELECT * FROM penjual INNER JOIN penduduk ON penjual.nama_penjual=penduduk.id") or die(mysqli_error($koneksi));
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id_penjual]>$data[nik] - $data[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input value="<?=$queryProduk['nama_produk']?>" name="nama_produk" id="nama_produk" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <label for="harga">Harga</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input value="<?=$queryProduk['harga']?>" id="harga" name="harga" type="text" class="form-control harga" aria-label="Amount (to the nearest dollar)" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="namaFile" class="form-label">Foto</label>
                            <input id="namaFile" name="namaFile" class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label for="detail_produk">Detail Produk</label>
                            <textarea cols="4" rows="4" form="form" name="detail_produk" id="detail_produk" autocomplete="off" type="text" class="form-control" placeholder="Tambahkan detail..." required><?=$queryProduk['deskripsi']?></textarea>
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