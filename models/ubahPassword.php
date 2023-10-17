<?php
include '../templates/header.php';
require '../functions/user.php';

$pageName = 'Ubah User';
$getId = $_GET['id'];
$queryUser = query("SELECT * FROM user WHERE id='$getId'")[0];

if (isset($_POST['submit'])) {
    if (ubahPassword($_POST) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataUser.php';
            </script> 
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah');
            </script> 
        ";
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
                        <input type="hidden" name="id" id="id" value="<?= $queryUser['id'] ?>">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input value="<?= $queryUser['password'] ?>" name="password" id="password" autocomplete="off" type="text" class="form-control" placeholder="Masukkan password..." required>
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