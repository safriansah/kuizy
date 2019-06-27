<?php
include"con.php";

$tabel="nilai";
$kode=$_POST["kode"];

$sql="DELETE FROM $tabel WHERE id_nilai='$kode' ";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Berhasil Dihapus");
            window.location.replace("../leaderboard");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../leaderboard");
          </script>';
}

$conn->close();
?>
