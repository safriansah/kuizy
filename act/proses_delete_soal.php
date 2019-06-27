<?php
include"con.php";

$tabel="soal";
$kode=$_POST["kode"];

$sql="DELETE FROM $tabel WHERE kd_soal='$kode' ";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Berhasil Dihapus");
            window.location.replace("../soal");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../soal");
          </script>';
}

$conn->close();
?>
