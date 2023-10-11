<?php
include 'general.php';

function tambahEvent($data,$file){
    global $dbconnect;
    $direktori='../../sidesa/img/event/';
    $judul_acara=$data['judul_acara'];
    $detail_acara=$data['detail_acara'];
    $lokasi=$data['lokasi'];
    $tanggal_acara=$data['tanggal_acara'];
    $gambar=$file['namaFile']['name'];
    move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$gambar);
    $query="INSERT INTO `event` VALUES ('', '$judul_acara','$detail_acara','$lokasi','$tanggal_acara','$gambar')";
    mysqli_query($dbconnect,$query);
    return mysqli_affected_rows($dbconnect);
}

function ubahEvent($data,$file){
    global $dbconnect;
    $direktori='../../sidesa/img/event/';
    $id=$data['id'];
    $oldFile=$data['oldFile'];
    $judul_acara=$data['judul_acara'];
    $detail_acara=$data['detail_acara'];
    $lokasi=$data['lokasi'];
    $tanggal_acara=$data['tanggal_acara'];
    $checkFile=$file['namaFile']['name'];

    if($checkFile != ""){
        $gambar=$checkFile;
        move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$gambar);
    } else {
        $gambar=$oldFile;
    }

    $query="UPDATE `event` SET 
    judul_acara='$judul_acara',
    detail_acara='$detail_acara',
    lokasi='$lokasi',
    tanggal_acara='$tanggal_acara',
    gambar='$gambar'
    WHERE id='$id'
    ";

    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}
?>