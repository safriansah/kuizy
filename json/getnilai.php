<?php
header('Content-Type: application/json');
include"../act/con.php";
//error_reporting(0);
$json=array();
$q=$_GET['q'];
$sql = "SELECT COUNT(*)AS jumlah,MAX(nilai)as max,ROUND(AVG(nilai),1)AS avg FROM nilai WHERE id_user='$q' ";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) :
array_push($json, array('ajumlah'=>$data['jumlah'],
                        'bmax'=>$data['max'],
                        'cavg'=>$data['avg']));
endwhile;
echo json_encode(array('nilai'=>$json));
?>
