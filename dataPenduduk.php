<?php
include 'templates/header.php';
include 'functions/functions.php';


$queryPenduduk = query("SELECT penduduk.id,keluarga.no_kk,nik,nama,tanggal_lahir,jenis_kelamin,agama,pekerjaan,alamat_lengkap FROM `penduduk` INNER JOIN keluarga ON penduduk.no_kk = keluarga.id");

?>
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
            <h1 class="mt-4">Data Penduduk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">databases/dataPenduduk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Penduduk
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
                                <?php $i = 1?>
                                <?php foreach ($queryPenduduk as $rows) { ?>
                                    <tr>
                                        <td><?= $i?></td>
                                        <td><?php echo $rows["nik"] ?></td>
                                        <td><?php echo $rows["no_kk"] ?></td>
                                        <td><?php echo $rows["nama"] ?></td>
                                        <td><?php echo $rows["agama"] ?></td>
                                        <td><?php echo $rows["tanggal_lahir"] ?></td>
                                        <td><?php echo $rows["jenis_kelamin"] ?></td>
                                        <td><?php echo $rows["pekerjaan"] ?></td>
                                        <td><?php echo $rows["alamat_lengkap"] ?></td>
                                    </tr>
                                    <?= $i++?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
    <?php include 'templates/footer.php'; ?>