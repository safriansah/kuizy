<?php
include"../act/con.php";

$tabel="nilai";
$user=$_POST["id"];
$kategori=$_POST["kategori"];
$nilai=$_POST["nilai"];
$waktu=$_POST["waktu"];

$sql="insert into $tabel(id_user,id_kategori,nilai,waktu,tgl) values('$user','$kategori','$nilai','$waktu',NOW())";

if ($conn->query($sql) === TRUE) {
    echo '1';
} else {
    echo $sql;
}

$conn->close();
?>
