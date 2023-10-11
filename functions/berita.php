<?php
    include 'general.php';

    function tambahBerita($data, $file){
        global $dbconnect;
        $direktori="../../sidesa/img/berita/";
        $judul_berita=$data['judul_berita'];
        $tanggal_berita=$data['tanggal_berita'];
        $tanggal_upload=$data['tanggal_upload'];
        $detail_berita=$data['detail_berita'];

        $foto=$file['namaFile']['name'];
        move_uploaded_file($file['namaFile']['tmp_name'],$direktori.$foto);
        $query="INSERT INTO berita VALUES('','$judul_berita','$tanggal_berita','$tanggal_upload','$detail_berita','$foto')";
        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
    }   
    
    function ubahBerita($data, $file){
        global $dbconnect;
        $id=$data['id'];
        $oldFile=$data['oldFile'];
        $direktori="../../sidesa/img/berita/";
        $judul_berita=$data['judul_berita'];
        $tanggal_berita=$data['tanggal_berita'];
        $tanggal_upload=$data['tanggal_upload'];
        $detail_berita=$data['detail_berita'];
        $checkFile=$file['namaFile']['name'];

        if($checkFile != "" ){
            $foto=$file['namaFile']['name'];
            move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$foto);
        }else{
            $foto=$oldFile;
        }

        $query="UPDATE berita SET judul_berita='$judul_berita', tanggal_berita='$tanggal_berita', tanggal_upload='$tanggal_upload',
        detail_berita='$detail_berita', gambar='$foto' WHERE id='$id'";
        
        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
    }
?>