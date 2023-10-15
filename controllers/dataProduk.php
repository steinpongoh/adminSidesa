<?php
require '../functions/umkm.php';
include '../templates/header.php';
$pageName = 'Data Produk';


$queryProduk = query('SELECT DISTINCT
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
JOIN penduduk ON penjual.nama_penjual=penduduk.id');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $pageName ?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active"><?= $pageName ?></li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        <?=$pageName?>
                    </div>
                    <a href="../models/tambahProduk.php">
                        <button type="button" class="btn btn-success">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-square-plus mr-2"></i>Tambah</div>
                        </button>
                    </a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Penjual</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Penjual</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryProduk as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows['nama']?></td>
                                        <td><?php echo $rows["nama_produk"] ?></td>
                                        <td>Rp<?php echo $rows["harga"] ?></td>
                                        <td>
                                            <img width="60px" height="60px" src="/sidesa/img/umkm/<?php echo $rows['gambar'] ?>" alt="">
                                        </td>
                                        <td class="text-muted"><?php echo substr($rows['deskripsi'],0,15)?>...</td>
                                        <td class="flex-row pr-2" style="display: flex;">
                                            <a href="../models/hapusProduk.php?id=<?= $rows['id_produk']; ?>">
                                                <button type="button" class="btn btn-danger">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a href="../models/ubahProduk.php?id=<?= $rows['id_produk'] ?>">
                                                <button type="button" class="btn btn-warning ml-2">
                                                    <div class="sb-nav-link-icon mr-0 ml-0 mb-0 mt-0"><i class="fa-solid fa-pen"></i></div>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<?php include '../templates/footer.php' ?>;