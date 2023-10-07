<?php
include 'functions/functions.php';
include 'templates/header.php';

$queryPenduduk = query("SELECT * FROM penduduk");
$queryKeluarga = query("SELECT * FROM keluarga");
$queryPria = query("SELECT * FROM penduduk WHERE jenis_kelamin = 'Pria'");
$queryWanita = query("SELECT * FROM penduduk WHERE jenis_kelamin = 'Wanita'");

$pageName = 'Dashboard';
?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                <div class="card-body pb-0 text-center">Total Data Keluarga :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 30px;"><?php echo count($queryPenduduk) ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/adminSidesa/dataPenduduk.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body pb-0 text-center">Total Data Keluarga :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 30px;"><?php echo count($queryKeluarga) ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="/adminSidesa/dataKeluarga.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                <div class="card-body pb-0 text-center">Total Data Keluarga :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 30px;"><?php echo count($queryPria) ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                <div class="card-body pb-0 text-center">Total Data Keluarga :</div>
                    <div class="card-body font-weight-bolder text-center pt-0 pb-1" style="font-size: 30px;"><?php echo count($queryWanita) ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
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