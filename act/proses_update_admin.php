<?php
include"con.php";
session_start();

$tabel="admin";
$username=$_POST["username"];
$kode=$_POST["kode"];

$sql="UPDATE $tabel SET username='$username' WHERE id='$kode'";
if($_POST["password"]){
    $password=md5($_POST["password"]);
    $sql="UPDATE $tabel SET username='$username',password='$password' WHERE id='$kode'";
}

if ($conn->query($sql) === TRUE) {
    $_SESSION['username']=$username;
    echo '<script>
            alert("Success: Update Berhasil");
            window.location.replace("../profile");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../profile");
          </script>';
}

$conn->close();
?>
