<?php
include"../act/con.php";
error_reporting(0);
$q=$_GET['q'];
$sql = "select gambar from soal where kd_soal='$q'";
$query = $conn->query($sql);
$data = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title>Image</title>
</head>

<body>
  <div style="font-size:6px;">
    <p>
    Source: <b><?php echo $data['gambar']; ?></b><br>
       <audio controls autoplay>
          <source src="<?php echo $data['gambar']; ?>" type="audio/ogg">
          <source src="<?php echo $data['gambar']; ?>" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio> 
    </p>
  </div>
</body>
</html>
