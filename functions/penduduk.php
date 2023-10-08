<?php
include 'general.php';

function tambahPenduduk($data)
{
    global $dbconnect;
    $no_kk = $data['kk'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $agama = $data['agama'];
    $pekerjaan = $data['pekerjaan'];
    $alamat_lengkap = $data['alamat_lengkap'];

    $queryAdd = "INSERT INTO penduduk VALUES ('','$no_kk','$nik','$nama','$tanggal_lahir','$jenis_kelamin','$agama','$pekerjaan','$alamat_lengkap')";
    mysqli_query($dbconnect, $queryAdd);
    return mysqli_affected_rows($dbconnect);
}

function ubahPenduduk($data)
{
    global $dbconnect;
    $id = $data['id'];
    $no_kk = $data['kk'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $agama = $data['agama'];
    $pekerjaan = $data['pekerjaan'];
    $alamat_lengkap = $data['alamat_lengkap'];

    $queryUpdate = "UPDATE penduduk SET no_kk = '$no_kk',
    nik = '$nik',
    nama ='$nama',
    tanggal_lahir = '$tanggal_lahir',
    jenis_kelamin = '$jenis_kelamin',
    agama = '$agama',
    pekerjaan = '$pekerjaan',
    alamat_lengkap = '$alamat_lengkap' WHERE id='$id'";
    mysqli_query($dbconnect, $queryUpdate);
    return mysqli_affected_rows($dbconnect);
}
