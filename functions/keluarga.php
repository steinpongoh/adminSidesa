<?php
include 'general.php';

function tambahKeluarga($data){
    global $dbconnect;
    $no_kk = $data['kartu_keluarga'];
    $nama_kepala_keluarga = $data['kepala_keluarga'];
    $jumlah_anggota_keluarga = $data['jumlah_anggota'];
    $queryAdd = "INSERT INTO keluarga VALUES ('','$no_kk','$nama_kepala_keluarga','$jumlah_anggota_keluarga')";
    mysqli_query($dbconnect, $queryAdd);
    return mysqli_affected_rows($dbconnect);
}

function ubahKeluarga($data){
    global $dbconnect;
    $id=$data['id'];
    $no_kk = $data['kartu_keluarga'];
    $nama_kepala_keluarga = $data['kepala_keluarga'];
    $jumlah_anggota_keluarga = $data['jumlah_anggota'];
    $queryAdd = "UPDATE keluarga SET no_kk='$no_kk',
    nama_kepala_keluarga='$nama_kepala_keluarga',
    jumlah_anggota_keluarga='$jumlah_anggota_keluarga' WHERE id='$id'";
    mysqli_query($dbconnect, $queryAdd);
    return mysqli_affected_rows($dbconnect);
}
?>