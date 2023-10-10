<?php
include 'general.php';

function ubahPengaduan($data, $file)
{
    global $dbconnect;
    $direktori = "/sidesa/img/pengaduan/";
    $id = $data['id'];
    $oldFile = $data['oldFile'];
    $nama_pengadu = $data['nama_pengadu'];
    $alamat_lengkap = $data['alamat_lengkap'];
    $judul_pengaduan = $data['judul_pengaduan'];
    $detail_pengaduan = $data['detail_pengaduan'];
    $tanggal_pengaduan = $data['tanggal_pengaduan'];
    $no_telepon = $data['no_telepon'];
    $checkFile = $file['gambar']['name'];

    if($checkFile != ""){
        $gambar = $file['gambar']['name'];
        move_uploaded_file($file['gambar']['tmp_name'], $direktori.$file);
    } else {
        $gambar = $oldFile;
    }
    
    $query = "UPDATE pengaduan SET 
    nama_pengadu='$nama_pengadu',
    alamat_lengkap='$alamat_lengkap',
    judul_pengaduan='$judul_pengaduan',
    detail_pengaduan='$detail_pengaduan',
    tanggal_pengaduan='$tanggal_pengaduan',
    no_telepon = '$no_telepon',
    gambar = '$gambar'
    ";
    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}
