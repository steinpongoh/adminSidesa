<?php
include 'templates/header.php';
include 'functions/functions.php';


$queryPenduduk = query("SELECT * FROM keluarga");

?>
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
            <h1 class="mt-4">Data Keluarga</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">databases/dataKeluarga</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Data Keluarga
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Jumlah Anggota Keluarga</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Jumlah Anggota Keluarga</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1?>
                                <?php foreach ($queryPenduduk as $rows) { ?>
                                    <tr>
                                        <td><?= $i?></td>
                                        <td><?php echo $rows['no_kk']?></td>
                                        <td><?php echo $rows['nama_kepala_keluarga']?></td>
                                        <td><?php echo $rows['jumlah_anggota_keluarga']?></td>
                                    </tr>
                                    <?php $i++?>
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