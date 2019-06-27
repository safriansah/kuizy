<?php
include"con.php";

$tabel="user";
$nama=$_POST["nama"];
$email=$_POST["email"];
$password=md5($_POST["password"]);

$sql="insert into $tabel(nama,email,password) values('$nama','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Tambah User Berhasil");
            window.location.replace("../user");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../tambahuser");
          </script>';
}

$conn->close();
?>
