<?php
require 'general.php';

function tambahPengumuman($data){
    global $dbconnect;
    $judul=$data['judul_pengumuman'];
    $detail=$data['detail_pengumuman'];
    $tanggal=$data['tanggal_pengumuman'];
    $query="INSERT INTO pengumuman VALUES('','$judul','$detail','$tanggal')";
    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}

?>



