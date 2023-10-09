<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/adminSidesa/styles/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" type="text/css" />
    <script src="https://kit.fontawesome.com/5af47de50f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <title>Admin SIDESA</title>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">SI Tondangow</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/adminSidesa/index.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge-high"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Databases</div>
                        <a class="nav-link" href="/adminSidesa/controllers/dataPenduduk.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-person"></i></div>
                            Data Penduduk
                        </a>
                        <a class="nav-link" href="/adminSidesa/controllers/dataKeluarga.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-roof"></i></div>
                            Data Keluarga
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-shop"></i></div>
                            Data UMKM
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-photo-film"></i></div>
                            Data Galeri
                        </a>
                        <a class="nav-link" href="/adminSidesa/controllers/dataPengaduan.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-flag"></i></div>
                            Data Pengaduan
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                            Data Berita
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                            Data Pengumuman
                        </a>
                        <a class="nav-link" href="/adminSidesa/controllers/dataEvent.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                            Data Event
                        </a>
                    </div>
                </div>
            </nav>
        </div>