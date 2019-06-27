<?php
include"con.php";

$tabel="nilai";
$nilai=$_POST["nilai"];
$waktu=$_POST["waktu"];
$tanggal=$_POST["tanggal"];
$kode=$_POST["kode"];

$sql="UPDATE $tabel SET nilai='$nilai',waktu='$waktu',tgl='$tanggal' WHERE id_nilai='$kode'";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Update User Berhasil");
            window.location.replace("../leaderboard");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../updateleaderboard/'.$kode.'");
          </script>';
}

$conn->close();
?>
