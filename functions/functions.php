<?php
require_once 'dbconnect.php';

function query($query) {
    global $dbconnect;
    $result=mysqli_query($dbconnect,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambahPenduduk($data){
    global $dbconnect;
    $no_kk=$data['kk'];
    $nik=$data['nik'];
    $nama=$data['nama'];
    $tanggal_lahir=$data['tanggal_lahir'];
    $jenis_kelamin=$data['jenis_kelamin'];
    $agama=$data['agama'];
    $pekerjaan=$data['pekerjaan'];
    $alamat_lengkap=$data['alamat_lengkap'];

    $queryAdd="INSERT INTO penduduk VALUES ('','$no_kk','$nik','$nama','$tanggal_lahir','$jenis_kelamin','$agama','$pekerjaan','$alamat_lengkap')";
    mysqli_query($dbconnect, $queryAdd);
    return mysqli_affected_rows($dbconnect);
}
?>