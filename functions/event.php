<?php
include 'general.php';

function tambahEvent($data){
    global $dbconnect;
    $judul_acara=$data['judul_acara'];
    $detail_acara=$data['detail_acara'];
    $lokasi=$data['lokasi'];
    $tanggal_acara=$data['tanggal_acara'];
    $query="INSERT INTO `event` VALUES ('', '$judul_acara','$detail_acara','$lokasi','$tanggal_acara')";
    mysqli_query($dbconnect,$query);
    return mysqli_affected_rows($dbconnect);
}

function ubahEvent($data){
    global $dbconnect;
    $id=$data['id'];
    $judul_acara=$data['judul_acara'];
    $detail_acara=$data['detail_acara'];
    $lokasi=$data['lokasi'];
    $tanggal_acara=$data['tanggal_acara'];

    $query="UPDATE `event` SET 
    judul_acara='$judul_acara',
    detail_acara='$detail_acara',
    lokasi='$lokasi',
    tanggal_acara='$tanggal_acara'
    WHERE id='$id'
    ";

    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}
?>