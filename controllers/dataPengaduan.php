<?php
require '../functions/pengaduan.php';
include '../templates/header.php';

$pageName = 'Data Pengaduan';
$queryPengaduan = query('SELECT * FROM pengaduan');

?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
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
                        <?= $pageName ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengadu</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Email</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Detail Pengaduan</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Gambar</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengadu</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Email</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Detail Pengaduan</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Gambar</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryPengaduan as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows['nama_pengadu'] ?></td>
                                        <td><?php echo $rows['alamat_lengkap'] ?></td>
                                        <td><?php echo $rows['email'] ?></td>
                                        <td><?php echo $rows['judul_pengaduan'] ?></td>
                                        <td style="color:grey;"><?php echo substr($rows['detail_pengaduan'],0,15) ?>......</td>
                                        <td><?php echo date('d M Y H:i', strtotime($rows['tanggal_pengaduan']))?></td>
                                        <td><?php echo $rows['no_telepon'] ?></td>
                                        <td>
                                            <img width="60px" height="60px" src="/sidesa/img/pengaduan/<?php echo $rows['gambar']?>" alt="">
                                        </td>
                                        <td class="flex-row pr-2 align-items-center justify-content-center" style="display: flex;">
                                            <a href="../models/hapusPengaduan.php?id=<?= $rows['id']; ?>">
                                                <button type="button" class="btn btn-danger">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a href="../models/ubahPengaduan.php?id=<?= $rows['id'] ?>">
                                                <button type="button" class="btn btn-warning ml-2">
                                                    <div class="sb-nav-link-icon mr-0 ml-0 mb-0 mt-0"><i class="fa-solid fa-pen"></i></div>
                                                </button>
                                            </a>
                                            <a href="../templates/notifikasi.php?id=<?= $rows['id'] ?>">
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
        </main>
    </div>
</div>

<?php include '../templates/footer.php'; ?>