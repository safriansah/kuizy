<?php
include"con.php";

$tabel="user";
$kode=$_POST["kode"];

$sql="DELETE FROM $tabel WHERE id='$kode' ";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Berhasil Dihapus");
            window.location.replace("../user");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../user");
          </script>';
}

$conn->close();
?>
