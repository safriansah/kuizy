<?php
header('Content-Type: application/json');
include"../act/con.php";
error_reporting(0);
$json=array();
$q=$_GET['q'];
$sql = "select * from soal order by rand() limit 15";
if($q) $sql = "select * from soal where kategori='$q' order by rand() limit 15";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) :
array_push($json, array('kode'=>$data['kd_soal'],
                        'pertanyaan'=>$data['soal'],
                        'pil_a'=>$data['pil_a'],
                        'pil_b'=>$data['pil_b'],
                        'pil_c'=>$data['pil_c'],
                        'pil_d'=>$data['pil_d'],
                        'jawaban'=>$data['jawaban'],
                        'zgambar'=>$data['gambar']));
endwhile;
echo json_encode(array('soals'=>$json));
?>
