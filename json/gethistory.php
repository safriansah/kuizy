<?php
header('Content-Type: application/json');
include"../act/con.php";
//error_reporting(0);
$json=array();
$q=$_GET['q'];
$sql = "SELECT nilai,waktu,kategori.nama_kat FROM nilai,kategori WHERE nilai.id_kategori=kategori.kd_kat AND id_user='$q' order by id_nilai desc";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) :
array_push($json, array('akate'=>$data['nama_kat'],
                        'bnilai'=>$data['nilai'],
                        'cwaktu'=>$data['waktu']));
endwhile;
echo json_encode(array('nilai'=>$json));
?>
