<?php
include"con.php";

$tabel="user";
$nama=$_POST["nama"];
$email=$_POST["email"];
$kode=$_POST["kode"];

$sql="UPDATE $tabel SET nama='$nama',email='$email' WHERE id='$kode'";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Update User Berhasil");
            window.location.replace("../user");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../updateuser/'.$kode.'");
          </script>';
}

$conn->close();
?>
