<?php
header('Content-Type: application/json');
include"../act/con.php";
error_reporting(0);
$tabel="user";
$user = $_POST['email'];
$pass = md5($_POST['password']);
$sql = "select * from $tabel where email='$user' and password='$pass'";
$result = $conn->query($sql);
$json=array();
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    array_push($json, array('status'=>'1',
                        'id'=>$data['id'],
                        'nama'=>$data['nama'],
                        'email'=>$data['email'],
                        'vemail'=>$data['vEmail']));
} else {
    array_push($json, array('status'=>'0',
                        'id'=>'',
                        'nama'=>'',
                        'email'=>'',
                        'vemail'=>''));
}
echo json_encode(array('users'=>$json));

$conn->close();
?>
