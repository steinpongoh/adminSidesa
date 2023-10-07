<?php
include '../templates/header.php';
include '../functions/functions.php';


$queryPenduduk = query("SELECT penduduk.id,keluarga.no_kk,nik,nama,tanggal_lahir,jenis_kelamin,agama,pekerjaan,alamat_lengkap FROM `penduduk` INNER JOIN keluarga ON penduduk.no_kk = keluarga.id");
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Penduduk</h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Penduduk</li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        Data Penduduk
                    </div>
                    <a href="../models/tambahPenduduk.php">
                        <button type="button" class="btn btn-secondary">
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
                                    <th>KK</th>
                                    <th>Name</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat Lengkap</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>KK</th>
                                    <th>Name</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat Lengkap</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryPenduduk as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows["nik"] ?></td>
                                        <td><?php echo $rows["no_kk"] ?></td>
                                        <td><?php echo $rows["nama"] ?></td>
                                        <td><?php echo $rows["agama"] ?></td>
                                        <td><?php echo $rows["tanggal_lahir"] ?></td>
                                        <td><?php echo $rows["jenis_kelamin"] ?></td>
                                        <td><?php echo $rows["pekerjaan"] ?></td>
                                        <td><?php echo $rows["alamat_lengkap"] ?></td>
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
<?php include '../templates/footer.php'; ?>