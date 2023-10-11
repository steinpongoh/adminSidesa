<?php
$query = mysqli_query($koneksi, "select * from pengaduan");
$user = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Kami telah menerima pengaduan anda yaitu: 
    Judul Pengaduan: <?php echo $user['judul_pengaduan'];?>
    Detail: <?php echo $user['detail_pengaduan'];?>
    Tanggal Pengaduan: <?php echo $user['tanggal_pengaduan']?><br>
    Kami akan segera melaporkannya ke pihak berwenang dan kami akan berusaha secepat mungkin akan mengatasinya.<br>
    Terima kasih atas laporannya.
    </p>
</body>
</html>
