<?php
include 'functions/general.php';
include 'templates/header.php';

$pageName = 'Dashboard';

function totalData($table){
    echo count(query("SELECT * FROM `$table`"));
}

$pageName = 'Dashboard';
?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <h1 class="mt-4"><?= $pageName ?></h1>
        <ol class="breadcrumb mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active"><?= $pageName ?></li>
            </ol>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-black mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Penduduk :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('penduduk')?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-white stretched-link" href="/adminSidesa/controllers/dataPenduduk.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-black mb-4">
                    <div class="card-body pb-0 text-center">Keluarga :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('keluarga') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-white stretched-link" href="/adminSidesa/controllers/dataKeluarga.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4">
                    <div class="card-body pb-0 text-center">UMKM :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('produk') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-white stretched-link" href="/adminSidesa/controllers/dataProduk.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Berita:</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('berita') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-light stretched-link" href="/adminSidesa/controllers/dataBerita.php">View Details</a>
                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Pengumuman:</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('Pengumuman')?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-light stretched-link" href="/adminSidesa/controllers/dataPengumuman.php">View Details</a>
                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Event :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('event') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-light stretched-link" href="/adminSidesa/controllers/dataEvent.php">View Details</a>
                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Pengaduan :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('Pengaduan') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-light stretched-link" href="/adminSidesa/controllers/dataPengaduan.php">View Details</a>
                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-light text-dark mb-4 shadow-sm">
                    <div class="card-body pb-0 text-center">Galeri :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 25px;"><?php totalData('galeri') ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between bg-info">
                        <a class="small text-light stretched-link" href="/adminSidesa/controllers/dataGaleri.php">View Details</a>
                        <div class="small text-light"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SI Tondangow 2023</div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include 'templates/footer.php' ?>