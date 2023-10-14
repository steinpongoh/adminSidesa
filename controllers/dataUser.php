<?php
require '../functions/pengaduan.php';
include '../templates/header.php';

$pageName = 'Data User';
$queryuser = query('SELECT * FROM user');

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
                                    <th>Nama Lengkap</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryuser as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows['username'] ?></td>
                                        <td><?php echo $rows['password'] ?></td>
                                        <td><?php echo $rows['role']==1?'Admin':'Pengunjung'?></td>
                                        <td class="flex-row pr-2 align-items-center justify-content-center" style="display: flex;">
                                            <a href="../models/hapusUser.php?id=<?= $rows['id']; ?>">
                                                <button type="button" class="btn btn-danger">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a class="btn btn-warning ml-2 dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-pen"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                                <a class="dropdown-item" href="../models/ubahUsername.php?id=<?= $rows['id']; ?>">Username</a>
                                                <a class="dropdown-item" href="../models/ubahPassword.php?id=<?= $rows['id']; ?>">Password</a>
                                            </div>
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