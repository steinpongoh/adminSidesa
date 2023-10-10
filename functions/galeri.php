<?php
    include 'general.php';

    function tambahGaleri($data, $file){
        global $dbconnect;
        $direktori="../../sidesa/img/galeri/";
        $caption=$data['caption'];
        $tanggal_upload=$data['tanggal_upload'];

        $foto=$file['namaFile']['name'];
        move_uploaded_file($file['namaFile']['tmp_name'],$direktori.$foto);
        $query="INSERT INTO galeri VALUES('','$caption','$foto','$tanggal_upload')";
        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
    }   
    
    function ubahGaleri($data, $file){
        global $dbconnect;
        $id=$data['id'];
        $oldFile=$data['oldFile'];
        $direktori="../../sidesa/img/galeri/";
        $caption=$data['caption'];
        $tanggal_upload=$data['tanggal_upload'];
        $checkFile=$file['namaFile']['name'];

        if($checkFile != "" ){
            $foto=$file['namaFile']['name'];
            move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$foto);
        }else{
            $foto=$oldFile;
        }

        $query="UPDATE galeri SET caption='$caption',
        gambar='$foto',
        tanggal_upload='$tanggal_upload'
        WHERE id='$id'";

        mysqli_query($dbconnect,$query);
        return mysqli_affected_rows($dbconnect);
    }
?>