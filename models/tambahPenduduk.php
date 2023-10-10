<?php
include '../templates/header.php';
include '../functions/penduduk.php';

$pageName='Tambah Penduduk';


if(isset($_POST['submit'])){
    if(tambahPenduduk($_POST)>0){
        echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            </script> 
        ";
    }else{
        echo "
            <script>
            alert('Data Gagal Ditambahkan');
            </script> 
        ";
    }
}

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $pageName?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../controllers/dataPenduduk.php">Data Penduduk</a></li>
                    <li class="breadcrumb-item active"><?= $pageName?></li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        Form <?= $pageName?>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nik">Nomor Induk Kependudukan</label>
                            <input name="nik" autocomplete="off" type="number" class="form-control" id="nik" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input name="nama" autocomplete="off" type="text" class="form-control" id="nama" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="kk">Kartu Keluarga</label>
                            <select name="kk" id="selectize" class="form-select" required>
                                <option selected></option>
                                <?php
                                $query = mysqli_query($dbconnect, "SELECT * FROM keluarga") or die(mysqli_error($koneksi));
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option value=$data[id]>$data[no_kk] - $data[nama_kepala_keluarga]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group flex-column" style="display: flex;">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" style="padding:5px; height: 38px; border-radius: 4px; border-color:rgb(204, 204, 204); outline:none;" id="jenis_kelamin" class="form-select" required>
                                <option selected disabled hidden></option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input name="tanggal_lahir" autocomplete="off" type="date" class="form-control" id="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input name="agama" autocomplete="off" type="text" class="form-control" id="agama" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input name="pekerjaan" autocomplete="off" type="text" class="form-control" id="pekerjaan" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <input name="alamat_lengkap" autocomplete="off" type="text" class="form-control" id="alamat_lengkap" placeholder="..." required>
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