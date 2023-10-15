<?php
require '../functions/general.php';
$queryPenduduk = query('SELECT * FROM penduduk');
$date=date('d/M/Y',time());

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment;filename=Laporan Penduduk $date.xls");
?>
<style> .str{ mso-number-format:\@; } </style>
<body style="width: 100%; display:flex; align-items:center; justify-content:center; flex-direction:column; font-family:Arial;">
    <h1>Data Penduduk</h1>

    <table border="1" width="75%" cellspacing="0">
        <thead style="height:40px;">
            <tr style="text-align: center;">
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
        <tbody style="text-align: center;">
            <?php $i = 1 ?>
            <?php foreach ($queryPenduduk as $rows) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td class="str"><?php echo $rows["nik"] ?></td>
                    <td><?php echo $rows["no_kk"] ?></td>
                    <td><?php echo $rows["nama"] ?></td>
                    <td><?php echo $rows["agama"] ?></td>
                    <td><?php echo date('d M Y', strtotime($rows["tanggal_lahir"])) ?></td>
                    <td><?php echo $rows["jenis_kelamin"] ?></td>
                    <td><?php echo $rows["pekerjaan"] ?></td>
                    <td><?php echo $rows["alamat_lengkap"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
</body>