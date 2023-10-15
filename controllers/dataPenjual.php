<?php
require '../functions/umkm.php';
include '../templates/header.php';
$pageName = 'Data Penjual';


$queryPenjual=query('SELECT * FROM penjual INNER JOIN penduduk ON penjual.nama_penjual=penduduk.id')

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
                        Data Penjual
                    </div>
                    <a href="../models/tambahPenjual.php">
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
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Link Alamat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Link Alamat</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryPenjual as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows["nik"] ?></td>
                                        <td><?php echo $rows["nama"] ?></td>
                                        <td><?php echo $rows["no_telepon"] ?></td>
                                        <td class="text-muted"><?php echo substr($rows["alamat_toko"],0,20) ?>...</td>
                                        <td><?php echo $rows["link_alamat_toko"]?></td>
                                        <td class="flex-row pr-2" style="display: flex;">
                                            <a href="../models/hapusPenjual.php?id=<?= $rows['id_penjual']; ?>">
                                                <button type="button" class="btn btn-danger">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a href="../models/ubahPenjual.php?id=<?= $rows['id_penjual'] ?>">
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