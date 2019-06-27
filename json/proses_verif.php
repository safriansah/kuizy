<?php
include"../act/con.php";

$tabel="user";
$email = $_POST['email'];
$kode = $_POST['kode'];
$sql = "select * from $tabel where email='$email' and vEmail='$kode'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $sql="UPDATE $tabel SET vEmail='1' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo '1';
    } else {
        echo $sql;
    }
} else {
    echo $sql;
}

$conn->close();
?>
