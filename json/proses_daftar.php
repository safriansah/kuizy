<?php
include"../act/con.php";

$tabel="user";
$nama=$_POST["nama"];
$email=$_POST["email"];
$password=md5($_POST["password"]);

$sql="insert into $tabel(nama,email,password) values('$nama','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo '1';
} else {
    echo $sql;
}

$conn->close();
?>
