<?php
include '../functions/dbconnect.php';
$id =$_GET['id'];
$query =mysqli_query($dbconnect, "select * from pengaduan where id='$id'");
$user =mysqli_fetch_array($query);


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail -> IsSMTP();
$mail -> IsHTML(true);
$mail -> SMTPAuth   = true;
$mail -> Host       ='SMTP.gmail.com';
$mail -> Port       =465;
$mail -> SMTPSecure ='ssl';
$mail -> Username   ='ulllrauulll@gmail.com';
$mail -> Password   ='sqqelzaobjcnxdfm';
$mail -> From       ='ulllrauulll@gmail.com';
$mail -> FromName   ='Rauulll ULLL';
$mail -> addAddress($user['email']);
$mail -> Subject    ='Balasan Pengaduan Admin Desa Tondangow';
$mail -> Body       ='<p>Terima Kasih telah menggunakan Website ini. Kami telah menerima Pengaduan anda, dan segera akan kami proses sesuai dengan prosedur yang ada dan akan ditindak lanjuti oleh pemerintah setempat. <p> 
Judul Pengaduan:'. $user['judul_pengaduan']. '<p>'.
'Detail:'. $user['detail_pengaduan']. '<p>'.
'Tanggal Pengaduan:'. $user['tanggal_pengaduan']. '<p>'.
'Kami akan segera melaporkannya ke pihak berwenang dan kami akan berusaha secepat mungkin akan mengatasinya.<br>
Terima kasih atas laporannya.</p>';

if($mail->send()){
    echo "
        	<script>
        		alert ('Email Berhasil Terkirim');
        		document.location.href = '../controllers/dataPengaduan.php';
        	 </script>
        ";
}else{
    echo "Email gagal terkirim";
};

?>