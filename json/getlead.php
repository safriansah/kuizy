<?php
header('Content-Type: application/json');
include"../act/con.php";
//error_reporting(0);
$json=array();
$q=$_GET['q'];
$sql = "SELECT nama,ROUND(nilai,0) as nilai,waktu FROM nilai, user WHERE id_kategori='$q' and nilai.id_user=user.id ORDER BY nilai.nilai DESC, nilai.waktu DESC limit 3";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) :
array_push($json, array('anama'=>$data['nama'],
                        'bnilai'=>$data['nilai'],
                        'cwaktu'=>$data['waktu']));
endwhile;
echo json_encode(array('nilai'=>$json));
?>
