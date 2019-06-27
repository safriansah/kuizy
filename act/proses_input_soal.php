<?php
include"con.php";

$tabel="soal";
$perta=$_POST["pertanyaan"];
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$jawab=$_POST["jawaban"];
$kategori=$_POST["kategori"];
$gambar=$_POST["gambar"];

$sql="insert into $tabel(soal,pil_a,pil_b,pil_c,pil_d,jawaban,kategori,gambar) values('$perta','$a','$b','$c','$d','$jawab','$kategori','$gambar')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Success: Input Soal Berhasil");
            window.location.replace("../soal");
          </script>';
} else {
    echo '<script>
            alert("Error: '.$conn->error.'");
            window.location.replace("../tambahsoal");
          </script>';
}

$conn->close();
?>
