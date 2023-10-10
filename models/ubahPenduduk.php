<?php
include '../templates/header.php';
include '../functions/penduduk.php';

$pageName = 'Ubah Penduduk';

$getId = $_GET['id'];
$queryNoIDPenduduk=query("SELECT penduduk.no_kk FROM penduduk INNER JOIN keluarga ON penduduk.no_kk=keluarga.id WHERE penduduk.id='$getId'")[0];
$querySelectedData=query("SELECT keluarga.nama_kepala_keluarga, penduduk.id, keluarga.no_kk, penduduk.no_kk, nik, nama, tanggal_lahir, jenis_kelamin, agama, pekerjaan, alamat_lengkap FROM penduduk INNER JOIN keluarga ON penduduk.no_kk=keluarga.id WHERE penduduk.id='$getId'")[0];
if (isset($_POST['submit'])) {
    if (ubahPenduduk($_POST) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataPenduduk.php';
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
                    <li class="breadcrumb-item"><a href="../controllers/dataPenduduk.php">Data Penduduk</a></li>
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
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?=$querySelectedData['id']?>">
                        <div class="form-group">
                            <label for="nik">Nomor Induk Kependudukan</label>
                            <input value="<?= $querySelectedData["nik"]?>" name="nik" autocomplete="off" type="number" class="form-control" id="nik" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input value="<?= $querySelectedData['nama']?>" name="nama" autocomplete="off" type="text" class="form-control" id="nama" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="kk">Kartu Keluarga</label>
                            <select name="kk" id="selectize" class="form-select" required>
                                <option value="<?= $queryNoIDPenduduk['no_kk']?>" selected hidden></option>
                                <?php
                                $query = mysqli_query($dbconnect, "SELECT * FROM keluarga") or die(mysqli_error($dbconnect));
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id]>$data[no_kk] - $data[nama_kepala_keluarga]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group flex-column" style="display: flex;">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id='jenis_kelamin' name="jenis_kelamin" style="padding:5px; height: 38px; border-radius: 4px; border-color:rgb(204, 204, 204); outline:none;" id="jenis_kelamin" class="form-select" required>
                                <option value="<?=$querySelectedData['jenis_kelamin']?>" selected><?=$querySelectedData['jenis_kelamin']?></option>
                                <?php
                                    if($querySelectedData['jenis_kelamin'] == 'Wanita'){
                                        echo '<option value="Pria">Pria</option>';
                                    } elseif($querySelectedData['jenis_kelamin'] == 'Pria'){
                                        echo '<option value="Wanita">Wanita</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input value="<?=$querySelectedData['tanggal_lahir']?>" name="tanggal_lahir" autocomplete="off" type="date" class="form-control" id="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input value="<?=$querySelectedData['agama']?>" name="agama" autocomplete="off" type="text" class="form-control" id="agama" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input value="<?=$querySelectedData['pekerjaan']?>" name="pekerjaan" autocomplete="off" type="text" class="form-control" id="pekerjaan" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <input value="<?=$querySelectedData['alamat_lengkap']?>" name="alamat_lengkap" autocomplete="off" type="text" class="form-control" id="alamat_lengkap" placeholder="..." required>
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