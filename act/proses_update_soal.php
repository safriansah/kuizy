<?php
include"con.php";

$tabel="soal";
$perta=$_POST["pertanyaan"];
$kategori=$_POST["kategori"];
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$jawab=$_POST["jawaban"];
$kode=$_POST["kode"];
$gambar=$_POST["gambar"];

$sql="UPDATE soal SET soal='$perta',kategori='$kategori',pil_a='$a',pil_b='$b',pil_c='$c',pil_d='$d',jawaban='$jawab',gambar='$gambar' WHERE kd_soal='$kode'";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Update Soal Berhasil");
            window.location.replace("../soal");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../update/'.$kode.'");
          </script>';
}

$conn->close();
?>
