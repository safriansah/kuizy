<?php
include"../act/con.php";
require "../Autoload.php";

$api = new \Api\EmailApi();

$tabel="user";
$email=$_POST['email'];
$id="";
$characters = 'ABCDEF';
$id.=$characters[mt_rand(0, 5)];
$characters = '1234567890';
for ($i = 0; $i < 5; $i++) $id.=$characters[mt_rand(0, 9)];
$sql="UPDATE $tabel SET vEmail='$id' WHERE email='$email'";

$subjek="Kuizy";
$message="Your Kuizy Verification Code Is $id";

if ($conn->query($sql) === TRUE) {
    
    $api->send($email,$message,$subjek);

    echo 'Kode Verifikasi Telah Terkirim Ke '.$email;
} else {
    echo 'Error: '.$conn->error;
}
$conn->close();
?>
