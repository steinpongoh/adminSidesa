<?php
require '../functions/user.php';
include '../templates/header.php';

$pageName='Tambah User';
if (isset($_POST['submit'])) {
    if (tambahUser($_POST) > 0) {
        echo "<script>
            alert('User Berhasil Ditambah')
            document.location.href='../controllers/dataUser.php'
        </script>";
    } else {
        echo "<script>
            alert('User Gagal Ditambah')
            document.location.href='../models/tambahUser.php'
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
                    <li class="breadcrumb-item"><a href="../controllers/dataUser.php">Data User</a></li>
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
                        <div class="form-group">
                            <label for="username">Nama Lengkap</label>
                            <input name="username" id="username" autocomplete="off" type="text" class="form-control" placeholder="Masukkan Nama Anda!" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" id="password" autocomplete="off" type="password" class="form-control" placeholder="Isikan Password!" required>
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