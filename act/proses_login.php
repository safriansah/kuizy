<?php
include"con.php";
session_start();
$tabel="admin";
$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "select * from $tabel where username='$user' and password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    header('Location: ../main');
} else {
    echo '<script>
            alert("Error: Username atau Password Salah");
            window.location.replace("../login.php");
          </script>';
}

$conn->close();
?>
